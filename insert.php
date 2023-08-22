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
      $hosname = $_REQUEST['hospital_name'];
      $adminname = $_REQUEST['admin_name']; 
	  //$dob = $_REQUEST['dob']; 
	  $phone = $_REQUEST['phone'];  
	  $mail = $_REQUEST['mail'];
      $pass = $_REQUEST['password'];
      $cpass = $_REQUEST['cpassword'];
      $state = $_REQUEST['state'];
	  //$gender = $_REQUEST['gender'];
	  $address = $_REQUEST['address'];
        	  
$sql = "INSERT INTO hospital_registration VALUES (null,'$hosname','$adminname','$phone','$mail','$pass','$cpass','$state','$address')";

if ($conn->query($sql) === TRUE) {
  header("location: regsubhos.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>