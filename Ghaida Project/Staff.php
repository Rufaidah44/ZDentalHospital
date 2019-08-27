<?php
session_start();
?>
<!DOCTYPE html>
<html lang="AR">
  <head>
    <title>الطاقم الطبي</title>
    <?php
    include "head.html";
    ?>

    <div class="topnav" id="myTopnav">
   <a  href="Home.php">الصفحة الرئيسية</a>
   <a href="Awareness.php"> التوعية الصحية</a>
   <a href="About.php">عن المستشفى</a>
   <a href="Staff.php" class="active">الطاقم الطبي</a>
   <a href="Login.php" >تسجيل الدخول</a>
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

    <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                  <h2 class="mb-3">اطلع على نخبة الأطباء لدينا </h2>
                </div>
              </div>

              <div class="row">
                  <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                      <div class="staff">
                            <div class="img mb-4" style="background-image: url(images/p3.png);"></div>
                            <div class="info text-center">
                                <h3><a href="teacher-single.html">د. محمد عزت</a></h3>
                                <span class="position"><b>أخصائي تركيب الأسنان</b></span>
                                <div class="text">
                                  </div>
                            </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                      <div class="staff">
                            <div class="img mb-4" style="background-image: url(images/p2.png);"></div>
                            <div class="info text-center">
                                <h3><a href="teacher-single.html"></a>د. شيف شيرما</h3>
                                <span class="position"><b>أخصائي جراحة الفم</b></span>
                                <div class="text">
                              </div>
                            </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                      <div class="staff">
                            <div class="img mb-4" style="background-image: url(images/p4.png);"></div>
                            <div class="info text-center">
                                <h3><a href="teacher-single.html"></a>د. بدر الدين بازمي</a></h3>
                                <span class="position"><b>أخصائي طب أسنان الأطفال</b></span>
                                <div class="text">
                                  </div>
                            </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                      <div class="staff">
                            <div class="img mb-4" style="background-image: url(images/p1.png);"></div>
                            <div class="info text-center">
                                <h3><a href="teacher-single.html">د. ليلا فاني </a></h3>
                                <span class="position"><b>أخصائية جذور و أعصاب الأسنان</b></span>
                                <div class="text">
                                  </div>
                            </div>
                      </div>
                  </div>
                  </div>
                  <div class="container">
                  <div class="row">
                      <div class="col-lg-2 col-md-4 d-flex mb-sm-4 ftco-animate">
                          
                      </div>
                      <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                          <div class="staff">
                              <div class="img mb-4" style="background-image: url(images/p5.png);"></div>
                              <div class="info text-center">
                                  <h3><a href="teacher-single.html">د. عادل البلوي</a></h3>
                                  <span class="position"><b>طبيب أسنان عام </b></span>
                                  <div class="text">
                              </div>
                        </div>
                    </div>
                 </div>

                      <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                         <div class="staff">
                          <div class="img mb-4" style="background-image: url(images/p6.png);"></div>
                          <div class="info text-center">
                              <h3><a href="teacher-single.html"></a>د. عبد العزيز العصيمي</a></h3>
                              <span class="position"><b>طبيب أسنان عام</b></span>
                              <div class="text">
                                </div>
                          </div>
                    </div>
                      </div>
                      <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                          <div class="staff">
                              <div class="img mb-4" style="background-image: url(images/p7.jpg);"></div>
                              <div class="info text-center">
                                  <h3><a href="teacher-single.html"></a>د. أبو بكر الناصر </a></h3>
                                  <span class="position"><b>طبيب أسنان عام</b></span>
                                  <div class="text">
                                    </div>
                              </div>
                        </div>
                      </div>
            </div>
          </section>
      
          <script src="js/jquery.min.js"></script>
          <script src="js/jquery-migrate-3.0.1.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/jquery.easing.1.3.js"></script>
          <script src="js/jquery.waypoints.min.js"></script>
          <script src="js/jquery.stellar.min.js"></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="js/jquery.magnific-popup.min.js"></script>
          <script src="js/aos.js"></script>
          <script src="js/jquery.animateNumber.min.js"></script>
          <script src="js/bootstrap-datepicker.js"></script>
          <script src="js/jquery.timepicker.min.js"></script>
          <script src="js/scrollax.min.js"></script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
          <script src="js/google-map.js"></script>
          <script src="js/main.js"></script>
            
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
  <footer dir="rtl" class="ftco-footer ftco-section" style="padding: 2%; padding-top: 7%; background-color: #2cbcbc">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">مستشفى الزلفي لطب الفم و جراحة الأسنان</h2>
              <p>حيث الخدمات الأقضل و الأجود </p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <ul class="list-unstyled">
                <li><a href="About.html" class="py-2 d-block">عن المستشفى</a></li>
                <li><a href="Services.html" class="py-2 d-block">التوعية الصحية</a></li>
                <li><a href="Login.html" class="py-2 d-block">تسجيل الدخول</a></li>
                <li><a href="Contact.html" class="py-2 d-block">تواصل معنا</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">المركز</h2>
                <div class="block-23 mb-3">
                    <ul>
                        <li><span class="icon icon-map-marker"></span><span class="text"><a href="https://goo.gl/maps/zpXUFdgPNnu">مركز طب وجراحة الفم والأسنان بمستشفى الزلفي العام
                            As Salam, السلام،، Az Zilfi 15972 </a></span></li>
                        <li><a href="#"></a><span class="icon icon-phone"></span><span class="text" dir="ltr" >016 422 3458</span></a></li>
                        <li><a href="mailto:info@Zulfi.com"><span class="icon icon-envelope"></span><span class="text">info@Zulfi.com</span></a></li>
                        <li><a href="https://twitter.com/zgh6917"><span class="icon icon-twitter"></span><span class="text">مستشفى الزلفي</span></a></li>
                      </ul>
                </div>
            </div>
          </div>
        
      </div>
    </footer>
  <footer>
   <center>
  <hr width=70%  >
  <script>
  var today = new Date(); 
  document.write(today);
  </script>
  <h4 style="font-family:'Segoe UI Black'; "> All copy Right saved &copy; 2018</h4>
  </center>
  <br><br>
  
  </footer>
  </body>
  </html>
  