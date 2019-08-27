<?php 

$conn = new mysqli('localhost', 'root', '', 'dentist');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
	
    $sSQL= 'SET CHARACTER SET utf8'; 
    mysqli_query($conn,$sSQL) ;
    

    $sql = "SELECT time FROM working_hours WHERE did = '".$_POST['dctrid']."' AND date ='".$_POST['aptdate']."' AND status ='AVAILABLE'";
	$result = $conn->query($sql);

    if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}

    if ($result->num_rows > 0){  
    // output data of each row
   
    while($row = $result->fetch_assoc()) { 
     echo"<option>".$row['time']."</option>";
    }}
   
        ?>