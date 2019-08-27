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
<br><br>
<center>

<br><br>
<div style="width:70%" dir="rtl">
<h3> مواعيدي</h3>
<?php
$conn = new mysqli('localhost', 'root', '', 'dentist');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}

  $sSQL= 'SET CHARACTER SET utf8'; 
  mysqli_query($conn,$sSQL) ;

  $adate = date('y-m-d');

  $sql = "SELECT * FROM apointments a LEFT JOIN patients p on a.pid = p.pid  WHERE did = '".$_SESSION['userid']."' order by a.date desc " ;
  $result = $conn->query($sql);
  echo"<table style='width:100%'><tr><td style='width:25%'>التاريخ</td><td style='width:25%'>الوقت</td><td style='width:25%'>المريض</td><td style='width:25%'>الحالة</td></tr>";

  if ($result->num_rows > 0){  
  while($row = $result->fetch_assoc()) { 
  echo"<tr><tr><td>".$row['date']."</td><td>".$row['time']."</td><td> ".$row['f_name']."</td><td>".$row['status']."</td></tr>";
  }
  echo"</table>";}
  else echo "لا توجد موعيد اليوم";

?>
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
