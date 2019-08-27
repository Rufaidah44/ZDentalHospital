<?php
session_start();
?>

<!DOCTYPE html>
<html lang="AR">
  <head>
    <title>المواعيد</title>

    <?php
    include "head.html";
    ?>

  

<div class="topnav" id="myTopnav">
   <a  href="Home.php">الصفحة الرئيسية</a>
   <a id="ps" href="Awareness.php"> التوعية الصحية</a>
   <a id="pa" href="About.php">عن المستشفى</a>
   <a id="ps2" href="Staff.php">الطاقم الطبي</a>
   <a id="li" href="Login.php">تسجيل الدخول</a>
   <a id="lo" style="display:none" href="Logout.php">تسجيل الخروج</a>
   <a href="apointment.php"  id="ut" class="active">المواعيد</a>
   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
     <i class="fa fa-bars"></i>
   </a>
 </div>
  

 <?php if(!isset($_SESSION["userid"])){
   echo" <script>
   $('#ut').css('display', 'none');
   </script>";}
   
   if(isset($_SESSION['userid'])){
    echo" <script>
    $('#li').css('display', 'none');
    $('#lo').css('display', 'block');
    </script>";

   if($_SESSION["ut"] === 1){
     echo"<script>
         $('#ut').prop('href','apointment.php');
         </script>";
   }
   elseif($_SESSION['ut'] === 2){
        echo"<script>
            $('#ut').prop('href','drapointment.php');
            </script>";}
    elseif($_SESSION['ut'] === 3){
            echo"<script>
                $('#ut').prop('href','emapointment.php');
                </script>";}}
?>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="addapointment2.php" dir="rtl" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <center> <h3>إضافة موعد</h3></center>
    </div>

    <div class="container">
	

	 <label for="drname"><b>رقم المريض</b></label>&nbsp;&nbsp;
	 <input type="text" placeholder="رقم المريض" name="pno" required>
	<br>
      <label for="drname"><b>اختر الطبيب</b></label>&nbsp;&nbsp;
      <select name="drname" id="drname" required >
          <option value="10001"> د. محمد عزت</option>
          <option value="10002">د. شيف شيرما</option>
          <option value="10003">د. بدر الدين بازمي</option>
          <option value="10004">د. ليلا فاني</option>
          <option value="10005">د. عادل البلوي</option>
          <option value="10006">د. عبد العزيز العصيمي</option>
          <option value="10007">د. أبو بكر الناصر</option>
    </select>
      <br>

      <label ><b>اختر التاريخ</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="date"  name="adate" id="adate" required onchange="changeTime()" >
       <br> 

       <script>
         function changeTime()
         {        
            var i = document.getElementById("drname").selectedIndex;
            var drid = document.getElementById("drname").options[i].value;
            var adate = $("#adate").val();
            
            var getTime = {
              dctrid : drid ,
              aptdate : adate 
            }

            getTime = JSON.stringify(getTime);
            getTime = JSON.parse(getTime); 
            console.log(getTime.dctrid);
            
            $.post('checkTime.php',{dctrid:drid, aptdate:adate},
            function (data){
              $('#atime').html(data);


            });

            
         }
         </script>

      <label ><b>الوقت </b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="atime" id="atime">
          <!--<option>8:00 - 8:30</option>
          <option>8:30 - 9:00</option>
          <option>9:00 - 9:30</option>
          <option>9:30 - 10:00</option>
          <option>10:00 - 10:30</option>
          <option>10:30 - 11:00</option>
          <option>11:00 - 11:30</option>
          <option>11:30 - 12:00 </option>-->
         </select>
        <br>
        <center>
      <button type="submit" class="registerbtn">تأكيد</button>
    </div>


  </form>
</div>
<br><br>
<center>

<br><br>
<div style="width:70%" dir="rtl">
<button class="registerbtn" style="background-color:#400080" onclick="document.getElementById('id01').style.display='block'">إضافة موعد</button>
<form action="insertApointments.php">

<input type="submit" class="registerbtn" value="إدراج مواعيد الأسبوع"> </form>

<h3> مواعيد اليوم</h3>
<?php
$conn = new mysqli('localhost', 'root', '', 'dentist');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}

  $sSQL= 'SET CHARACTER SET utf8'; 
  mysqli_query($conn,$sSQL) ;
  $adate = date('y-m-d');
  $sql = "SELECT p.f_name as pf, p.l_name as pl, d.f_name as df, d.l_name as dl ,a.aid, a.pid, a.did, a.date, a.time,a.status  
  FROM apointments a LEFT JOIN doctors d on a.did = d.did INNER JOIN patients p on a.pid = p.pid  
  WHERE a.date = '$adate' " ;
  $result = $conn->query($sql);
  echo"<table style='width:100%'><tr><td style='width:16%'>التاريخ</td><td style='width:16%'>الوقت</td><td style='width:16%'>الطبيب</td><td style='width:16%'>المريض</td><td style='width:16%'>الحالة</td><td></td></tr>";

  if ($result->num_rows > 0){  
  while($row = $result->fetch_assoc()) { 
  echo"<tr><tr><td>".$row['date']."</td><td>".$row['time']."</td><td>د. ".$row['df']."&nbsp;".$row['dl']."</td><td>".$row['pf']."&nbsp;".$row['pl']."</td><td>".$row['status']."</td>
  <td><form action='deleteapointment.php' method='post'><input type='submit' value='حذف'><input type'text' name='aid' value='".$row['aid']."' style='display:none'>
  <input type'text' name='aid' value='".$row['aid']."' style='display:none'> <input type'text' name='aid' value='".$row['aid']."' style='display:none'></form></td></tr>";
  } echo"</table>";
}
else echo "لا توجد مواعيد";


?>
  
  <br><br><br><a href="admin.php"> صفحة التحكم </a>
</div>
<br><br><br>

<script>
     // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<?php 
include "footer.html";
?>
</body>
</html>
