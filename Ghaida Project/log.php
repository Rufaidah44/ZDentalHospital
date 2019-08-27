<?php 

$conn = new mysqli('localhost', 'root', '', 'dentist');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
	
    $sSQL= 'SET CHARACTER SET utf8'; 
    mysqli_query($conn,$sSQL) ;
    

    if( $_POST['type'] == 1){
    $sql = "SELECT * FROM patients WHERE pid = '".$_POST['id']."' AND password ='".$_POST['psw']."'";
	$result = $conn->query($sql);

    if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}

    if ($result->num_rows > 0){  
     
    // output data of each row
    while($row = $result->fetch_assoc()) { 
	if ($row["password"] == $_POST['psw'] ){
        session_start();
        
		          $_SESSION['userid'] = $row['pid'];
                  $_SESSION['username'] = $row['fname']." ".$row['lname'] ;
                  $_SESSION['ut'] = 1;
		 
		 header("Location: apointment.php");
	     echo "<script>alert('مرحباً بك');</script>";	 
	}
	 else echo"<center><h3>يوجد خطأ في رقم الهوية / رقم الموظف أو كلمة المرور</h3></center>";
}}}

elseif ($_POST['type'] == 2)
{

    $sql = "SELECT * FROM doctors WHERE did = '".$_POST['id']."' AND password ='".$_POST['psw']."'";
	$result = $conn->query($sql);

    if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}

    if ($result->num_rows > 0){  
     
    // output data of each row
    while($row = $result->fetch_assoc()) { 
	if ($row["password"] == $_POST['psw'] ){
        session_start();
        
		          $_SESSION['userid'] = $row['did'];
                  $_SESSION['username'] = $row['fname']." ".$row['lname'] ;
                  $_SESSION['ut'] = 2;
		 
		 header("Location: drapointment.php");
	     echo "<script>alert('مرحباً بك');</script>";	 
	}
	 else echo"<center><h3>يوجد خطأ في رقم الهوية / رقم الموظف أو كلمة المرور</h3></center>";
}}

}

    elseif ($_POST['type'] == 3)
    {
        $sql = "SELECT * FROM emplyees WHERE eid = '".$_POST['id']."' AND password ='".$_POST['psw']."'";
	$result = $conn->query($sql);

    if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}

    if ($result->num_rows > 0){  
     
    // output data of each row
    while($row = $result->fetch_assoc()) { 
	if ($row["password"] == $_POST['psw'] ){
        session_start();
        
		          $_SESSION['userid'] = $row['eid'];
                  $_SESSION['username'] = $row['fname']." ".$row['lname'] ;
                  $_SESSION['ut'] = 3;
		 
		 header("Location: emapointment.php");
	     echo "<script>alert('مرحباً بك');</script>";	 
	}
	 else echo"<center><h3>يوجد خطأ في رقم الهوية / رقم الموظف أو كلمة المرور</h3></center>";
}}
    }

?>