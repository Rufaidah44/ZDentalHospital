<?php
session_start();
?>

<!DOCTYPE html>
<html lang="AR">
  <head>
    <title>مستشفى الزلفي لطب الفم و جراحة الأسنان</title>
    <?php
    include "head.html";
    ?>

  

 <div class="topnav" id="myTopnav">
   <a class="active" href="Home.php">الصفحة الرئيسية</a>
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
 


 
 
  
    
    <div class="bodydiv">
        <div class="w3-content w3-section" style="width:100%; margin: 0px;padding: 0px; max-width: none;">
        <img class="mySlides" src="images\phonto.PNG" style="max-width: none; width:100% ;height:400px;">
        <!--img class="mySlides" src="images\dental-background.jpg" style="width:100%;height:400px;max-width: none;"> -->
      </div>
    
    <br>
    <div style="margin-top: -90px; text-align: center;">
    <!-- <h2 style="padding-left:10% ; padding-right:10%; "> مستشفى الزلفي لطب الفم و جراحة الأسنان</h2>-->
	<br><hr width=100%>
    
     </div>
     <center >
     <section class="ftco-intro" style=" float:center; ">
    	<div class="container" style="margin-top:0px; width: 100%; padding: 0%; text-align:center">
    		<div class="row no-gutters">
    			<div class="col-md-6 color-1 p-4">
    				<h3 class="mb-4">هاتف المركز</h3>
    				<p style="color:white">الاتصال على</p>
    				<span style="color:white" class="phone-number">054 689 8919</span>
    			</div>
    			<div class="col-md-6 color-2 p-4">
    				<h3 class="mb-4">ساعات العمل</h3>
    				<p class="openinghours d-flex">
              <span style="color:white">8:00 - 16:00</span>
              <span style="color:white">الأحد - الخميس</span>
    				</p>
    			</div>
    		</div>
    	</div>
    </section>
      </center>
      <br><br>
      <section dir="rtl"class=" ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ">
              <h2 class="mb-2">خدماتنا تجعلك دائماً متبسماً</h2>
              <p>نسعى دائماً لتقديم الأفضل و نيل رضاكم</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 d-flex align-self-stretch ">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-tooth-1"></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">تبييض الأسنان</h3>
                  <p>أسنان براقة لامعة مشرقة</p>
                </div>
              </div>      
            </div>
            <div class="col-md-3 d-flex align-self-stretch ">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-dental-care"></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">تنظيف الأسنان</h3>
                  <p>أسنان تشع تألقاً و نظافة</p>
                </div>
              </div>    
            </div>
            <div class="col-md-3 d-flex align-self-stretch ">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-tooth-with-braces"></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">تركيب التقويم</h3>
                  <p>أسنان متراصة مرتبة بمستوى واحد</p>
                </div>
              </div>      
            </div>
            <div class="col-md-3 d-flex align-self-stretch ">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-anesthesia"></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">أدوات تخدير حديثة</h3>
                  <p>عمل الخدمات اللازمة دون الإحساس بأدنى ألم</p>
                </div>
              </div>      
            </div>
          </div>
        </div>
        
      </section>

      <hr>


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
