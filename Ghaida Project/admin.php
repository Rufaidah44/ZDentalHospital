<?php
session_start();
?>

<!DOCTYPE html>
<html lang="AR">
  <head>
    <title>صفحة التحكم</title>

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
   <a href="apointment.php"  id="ut" >المواعيد</a>
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
<div dir="rtl"> 
<center>     
<h3> اضافة </h3>   
                <select name="type">
                <option value= 1> مريض </option>
                <option value= 2> دكتور </option>
                <option value= 3> موظف </option>
              </select>
              <input type="text" placeholder="رقم الهوية " name="pid" required>
           
            <input type="text" placeholder="الاسم الأول " name=" fname" required>

            <input type="text" placeholder="الاسم الثاني " name=" mname" required>

            <input type="text" placeholder="الاسم الأخير " name=" lname" required>

            <input type="text" placeholder="الجنسية " name=" nationality" required><br>
        
            <label style="color:#21aac4;">تاريخ الميلاد:  </label>
            <input type="date" placeholder="تاريخ الميلاد " name=" bdate" required><br><br>
        
            <input type="text" placeholder="العمر " name=" age" required><br>

            <input type="radio" placeholder="الجنس" name="gender" value="Male" required>&nbsp;<label style="color:#21aac4;">ذكر</label>
            &nbsp;&nbsp;
            <input type="radio" placeholder="الجنس" name="gender" value="Female" required>&nbsp;<label style="color:#21aac4;">أنثى</label>
            <br>
            <input type="text" placeholder="رقم الجوال" name="mobile" required>

            <input type="text" placeholder="البريد الالكتروني" name="email" required>

            <input type="text" placeholder="العنوان" name="addres" required>

            <input type="password" placeholder="كلمة المرور" name="psw" required>
        
            <input type="password" placeholder="إعادة كلمة المرور" name="psw-repeat" required>
            
          
              <button type="submit" class="registerbtn">تسجيل</button>
            
            </div>
      <br><br>
	  <hr>
	  <h3>تعديل</h3>
	  <input type="text" placeholder="رقم الهوية " name="pid" required>
	  <button type="submit" class="registerbtn">تسجيل</button>
	  
	  
	  <br><br>
	  <hr>
	  <h3>حذف</h3>
		  <input type="text" placeholder="رقم الهوية " name="pid" required>
	  <button type="submit" class="registerbtn">تسجيل</button>
		  
		  
		  
		  
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
