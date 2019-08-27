<?php
session_start();
?>

<!DOCTYPE html>
<html lang="AR">
  <head>
    <title>تواصل معنا </title>
    <style>
    ::placeholder{
      color: #21aac4;
    }
    </style>
<?php
    include "head.html";
    ?>

<div class="topnav" id="myTopnav">
   <a href="Home.php">الصفحة الرئيسية</a>
   <a id="ps" href="Awareness.php"> التوعية الصحية</a>
   <a id="pa" href="About.php">عن المستشفى</a>
   <a id="ps2" href="Staff.php">الطاقم الطبي</a>
   <a id="li" href="Login.php">تسجيل الدخول</a>
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
<br><br><br>
<center>
  <h2>نحن هنا نسمعك .. تواصل معنا</h2>
<div style="width:70%;" dir="rtl">
<form action="/action_page.php">
  <div class="container1">         

    <input type="text" placeholder="البريد الالكتروني" name="email" required>
    <input type="text" placeholder="الإسم الكامل" name="email" required>
    <input type="text" placeholder="عنوان الرسالة " name="email" required>
    <textarea placeholder="نص الرسالة" ></textarea>   </textarea>

    <button type="submit" class="registerbtn">ارسال</button>
  </center>
  </div>
</form>
</div>
    
<script>
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
  