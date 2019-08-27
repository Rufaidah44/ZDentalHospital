<?php 
session_start();
$conn = new mysqli('localhost', 'root', '', 'dentist');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
	
    $sSQL= 'SET CHARACTER SET utf8'; 
    mysqli_query($conn,$sSQL) ;
    

   

    $sql =  "INSERT INTO `apointments`(`pid`, `did`, `date`, `time`, `attachement`, `status`) VALUES 
    ('".$_SESSION['userid']."','".$_POST['drname']."','".$_POST['adate']."','".$_POST['atime']."','','مؤكد')";
	           if(mysqli_query($conn, $sql)){
                   $sql2 = "UPDATE working_hours set status = 'NOT AVAILABLE' WHERE did = '".$_POST['drname']."' AND
                   date = '".$_POST['adate']."' AND time = '".$_POST['atime']."'";
                   mysqli_query($conn, $sql2);
     
     header("location: apointment.php");
     echo "<script>alert('تم حجز الموعد');</script>";}
     else 
     echo "<script>alert('error');</script>".mysqli_error($conn);
    ?>