<?php 

	$conn = new mysqli('localhost', 'root', '', 'dentist');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
	
    $sSQL= 'SET CHARACTER SET utf8'; 
    mysqli_query($conn,$sSQL) ;
    

    $time = array('8:00 - 8:30','8:30 - 9:00','9:00 - 9:30','9:30 - 10:00','10:00 - 10:30','10:30 - 11:00',
        '11:00 - 11:30','11:30 - 12:00','13:00 - 13:30','13:30 - 14:00','14:00 - 14:30','14:30 - 15:00','15:00 - 15:30', '15:30 - 16:00');
        
        for($d = 0 ; $d <= 6; $d++){
           for($t = 0 ; $t < 14; $t++){
           $date = date('Y-m-d', strtotime('+'.$d.' days'));
           $sql = "INSERT INTO `working_hours`(`date`, `time`, `did`, `status`) VALUES 
           ('".$date."' ,'".$time[$t]."','10001','AVAILABLE')";
              if(mysqli_query($conn, $sql)){
                 }
                //else echo mysqli_error($conn);
}
        }

        for($d = 0 ; $d <= 6; $d++){
            for($t = 0 ; $t < 14; $t++){
            $date = date('Y-m-d', strtotime('+'.$d.' days'));
            $sql = "INSERT INTO `working_hours`(`date`, `time`, `did`, `status`) VALUES 
            ('".$date."' ,'".$time[$t]."','10002','AVAILABLE')";
               if(mysqli_query($conn, $sql)){
                  }
                 //else echo mysqli_error($conn);
 }
         }


         for($d = 0 ; $d <= 6; $d++){
            for($t = 0 ; $t < 14; $t++){
            $date = date('Y-m-d', strtotime('+'.$d.' days'));
            $sql = "INSERT INTO `working_hours`(`date`, `time`, `did`, `status`) VALUES 
            ('".$date."' ,'".$time[$t]."','10003','AVAILABLE')";
               if(mysqli_query($conn, $sql)){
                  }
                 //else echo mysqli_error($conn);
 }
         }
        

         for($d = 0 ; $d <= 6; $d++){
            for($t = 0 ; $t < 14; $t++){
            $date = date('Y-m-d', strtotime('+'.$d.' days'));
            $sql = "INSERT INTO `working_hours`(`date`, `time`, `did`, `status`) VALUES 
            ('".$date."' ,'".$time[$t]."','10004','AVAILABLE')";
               if(mysqli_query($conn, $sql)){
                  }
                 //else echo mysqli_error($conn);
 }
         }


         for($d = 0 ; $d <= 6; $d++){
            for($t = 0 ; $t < 14; $t++){
            $date = date('Y-m-d', strtotime('+'.$d.' days'));
            $sql = "INSERT INTO `working_hours`(`date`, `time`, `did`, `status`) VALUES 
            ('".$date."' ,'".$time[$t]."','10005','AVAILABLE')";
               if(mysqli_query($conn, $sql)){
                  }
                 //else echo mysqli_error($conn);
 }
         }



         for($d = 0 ; $d <= 6; $d++){
            for($t = 0 ; $t < 14; $t++){
            $date = date('Y-m-d', strtotime('+'.$d.' days'));
            $sql = "INSERT INTO `working_hours`(`date`, `time`, `did`, `status`) VALUES 
            ('".$date."' ,'".$time[$t]."','10006','AVAILABLE')";
               if(mysqli_query($conn, $sql)){
                  }
                 //else echo mysqli_error($conn);
 }
         }
        


         for($d = 0 ; $d <= 6; $d++){
            for($t = 0 ; $t < 14; $t++){
            $date = date('Y-m-d', strtotime('+'.$d.' days'));
            $sql = "INSERT INTO `working_hours`(`date`, `time`, `did`, `status`) VALUES 
            ('".$date."' ,'".$time[$t]."','10007','AVAILABLE')";
               if(mysqli_query($conn, $sql)){
                  }
                 //else echo mysqli_error($conn);
 }
         }
header("location:emapointment.php");
?>