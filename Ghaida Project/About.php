<?php
session_start();
?>
<!DOCTYPE html>
<html lang="AR">
  <head>
    <title>عن المستشفى</title>
    <?php
    include "head.html";
    ?>

<div class="topnav" id="myTopnav">
   <a  href="Home.php">الصفحة الرئيسية</a>
   <a id="ps" href="Awareness.php"> التوعية الصحية</a>
   <a id="pa" href="About.php" class="active">عن المستشفى</a>
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

<br>

<div class="w3-content w3-display-container" style="width:70%;">
  <img class="mySlides" src="images\g1.jpg" style="width:100%;height:300px">
  <img class="mySlides" src="images\g2.jpg" style="width:100%;height:300px">
  <img class="mySlides" src="images\g3.jpg" style="width:100%;height:300px">
  <img class="mySlides" src="images\g4.jpg" style="width:100%;height:300px">
  <img class="mySlides" src="images\g5.jpg" style="width:100%;height:300px">
  <img class="mySlides" src="images\g6.jpg" style="width:100%;height:300px">
  <img class="mySlides" src="images\g7.jpg" style="width:100%;height:300px">

<br>

<p>تم إنشاء مركز طب و جراحة الأسنان بمستشفى الزلفي في عام ١٤٣١ هـ
    و يحتوي المركز على مجموعة من العيادات التخصصية و عددها ٤ بالإضافة لعيادتين عامتين لتشخيص و علاج مشاكل الأسنان
    كما يحوي المركز على معمل أسنان لعمل تركيبات الأسنان المتحركة و الثابتة ، كذلك يوجد غرفة تعقيم متكاملة لتعقيم الأدوات المستخدمة و غرف انتظار نساء و أخرى للرجال تحتوي على شاشة عرض توعوية
    </p>
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<br><br>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>



<script>
  
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
  