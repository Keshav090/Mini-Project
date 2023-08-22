<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
      $pname = $_REQUEST['patientname'];
      $page = $_REQUEST['page']; 
	  $gender = $_REQUEST['gender'];  
	  $reason = $_REQUEST['reason'];
      $time = $_REQUEST['time'];
      //$fromtime = $_REQUEST['starttime'];
      //$totime = $_REQUEST['endtime'];
	  //$gender = $_REQUEST['gender'];
	  //$emergency = $_REQUEST['service'];
        	  
$sql = "INSERT INTO appointment_details VALUES(null,'$pname','$page','$gender','$reason','$time')";

if ($conn->query($sql) === TRUE) {
  header("location: appsub.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>