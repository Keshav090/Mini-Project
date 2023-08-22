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
      $hosname = $_REQUEST['hosname'];
      $ventbeds = $_REQUEST['ventbeds']; 
	  //$dob = $_REQUEST['dob']; 
	  $oxbeds = $_REQUEST['oxbeds'];  
	  $norbeds = $_REQUEST['norbeds'];
      $vacrooms = $_REQUEST['roomcount'];
      $fromtime = $_REQUEST['starttime'];
      $totime = $_REQUEST['endtime'];
	  //$gender = $_REQUEST['gender'];
	  $emergency = $_REQUEST['service'];
        	  
$sql = "INSERT INTO hos_details VALUES ('$hosname','$ventbeds','$oxbeds','$norbeds','$vacrooms','$fromtime','$totime','$emergency')";

if ($conn->query($sql) === TRUE) {
  header("location: regsubhos.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>