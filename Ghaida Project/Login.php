<?php
session_start();
?>

<!DOCTYPE html>
<html lang="AR">
  <head>
    <title>تسجيل الدخول</title>
    
    <?php
    include "head.html";
    ?>

<div class="topnav" id="myTopnav">
   <a  href="Home.php">الصفحة الرئيسية</a>
   <a id="ps" href="Awareness.php"> التوعية الصحية</a>
   <a id="pa" href="About.php">عن المستشفى</a>
   <a id="ps2" href="Staff.php">الطاقم الطبي</a>
   <a id="li" href="Login.php" class="active">تسجيل الدخول</a>
   <a id="lo" style="display:none" href="Logout.php">تسجيل الخروج</a>
   <a href="apointment.php"  id="ut" class="ut">المواعيد</a>
   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
     <i class="fa fa-bars"></i>
   </a>
 </div>
  

 <?php if(!isset($_SESSION["userid"])){
   echo" <script>
   $('.ut').css('display', 'none');
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

  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'up')"><i class="fa fa-user-plus" aria-hidden="true"></i> &nbsp; تسجيل جديد </button>
    <button class="tablinks" onclick="openCity(event, 'plog')"><i class="fa fa-users" aria-hidden="true"></i> &nbsp; تسجيل دخول</button>
    </div>
  
  <div id="up" class="tabcontent" dir="rtl"> 
    <div class="row mb-5">
        <div class="col-md-10">
        <form action="up.php" method="post">
          <div class="container1">         
           <center>
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
            <hr>
            <p>عند الضغط على زر تسجيل فإنك توافق على <a href="#">سياسة الخصوصية و الاستخدام</a>.</p>
        
            
            <button type="submit" class="registerbtn">تسجيل</button>
          </center>
          </div>
        </form>
        </div>
    </div>
  </div>


  <div id="plog" class="tabcontent" dir="rtl">
      <div class="row mb-5">
       <div class="col-md-10">
          <form action="log.php" method="post" >
            <center>
            <div class="container1">         
                <select name="type">
                <option value= 1> مريض </option>
                <option value= 2> دكتور </option>
                <option value= 3> موظف </option>
              </select>

              <input type="text" placeholder="رقم الهوية/ رقم الموظف" name="id" required>

              <input type="password" placeholder="كلمة المرور" name="psw" required>
          
              
              <button type="submit" class="registerbtn">دخول</button>
            </center>
            </div>
          </form>
          </div>
  </div>
  </div>
  
 
  
  <br><br>
    
<script>
  function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 5000); // Change image every 2 seconds
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
  </div>
  <?php 
include "footer.html";
?>
  </body>
  </html>
  