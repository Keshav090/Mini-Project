<?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "mini_project");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 10 values from the form data(input)
         $firstname = $_REQUEST['first_name'];
      $lastname = $_REQUEST['last_name']; 
	  $dob = $_REQUEST['dob']; 
	  $phone = $_REQUEST['phone'];  
	  $email = $_REQUEST['mail'];
      $pass = $_REQUEST['password'];
      $cpass = $_REQUEST['cpassword'];
      $region = $_REQUEST['state'];
	  $gender = $_REQUEST['gender'];
	  $address = $_REQUEST['address'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO user_registration VALUES (null,'$firstname','$lastname','$dob','$phone','$email','$pass','$cpass','$region','$gender','$address')";
		
          
        if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  header("location: regsubusr.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
          
        // Close connection
        mysqli_close($conn);
        ?>