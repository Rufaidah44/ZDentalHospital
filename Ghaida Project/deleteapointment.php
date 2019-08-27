<?php 

$conn = new mysqli('localhost', 'root', '', 'dentist');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
	
    $sSQL= 'SET CHARACTER SET utf8'; 
    mysqli_query($conn,$sSQL) ;

    
    $sql = "DELETE from apointments WHERE aid='".$_POST['aid']."'";
    $result = $conn->query($sql);

    
    $sql2 = "UPDATE working_hours set status = 'AVAILABLE' WHERE did = '".$_POST['drname']."' AND
    date = '".$_POST['adate']."' AND time = '".$_POST['atime']."'";
    mysqli_query($conn, $sql2);


    if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}

    else 
    echo"تم الحذف";
    header("location: apointment.php");
    
    
    ?>