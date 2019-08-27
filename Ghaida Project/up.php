<?php 

	$conn = new mysqli('localhost', 'root', '', 'dentist');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
	
    $sSQL= 'SET CHARACTER SET utf8'; 
	mysqli_query($conn,$sSQL) ;
	
    
   $sql = "INSERT INTO `patients`(`pid`, `f_name`, `m_name`, `l_name`, `nationality`, 
    `b_date`, `age`, `gender`, `mobile`, `email`, `address`,`password`) 
    VALUES ('".$_POST['pid']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['lname']."'
	,'".$_POST['nationality']."','".$_POST['bdate']."','".$_POST['age']."','".$_POST['gender']."','".$_POST['mobile']."'
	,'".$_POST['email']."','".$_POST['addres']."','".$_POST['psw']."')";
	 
	 if($_POST['psw'] != $_POST['psw-repeat'])
		echo "<h2> كلمة المرو غير متطابقة</h2>";
		else {
	           if(mysqli_query($conn, $sql)){
		          session_start();
		          $_SESSION['userid'] = $_POST['pid'];
		          $_SESSION['nmae'] = $_POST['fname']." ".$_POST['lname'] ;session_start();
                  $_SESSION['ut'] = 1;
		 
		 header("Location: apointment.php");
	 echo "<script>alert('تم تسجيلك بنجاح');</script>";
      
	 	 }
 else echo"<h3>يوجد خطأ في التسجيل</h3>";
		}

?>