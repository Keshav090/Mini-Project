<html>
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registeration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
        <div class="nav">
            <div  class="logo" >
                <img src="logo.jpg"> <h1 style="font-family:sansserif;">  Hospitals <br><span>Portal</span></h1>  
            </div>
       </div><br><br><br><br>
	    <h1 align="center" class="color1"><u>Your Appointment is successful with following details</u></h1><br><br><br><br><br>
<div class="content">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT p_name, reason, time FROM appointment_details where id='15'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h2>","Name: " . $row["p_name"]. " <br>- Reason of visit: " . $row["reason"]. "<br>-Time: </h2>" . $row["time"]. "<br>","</h2>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<form>

<a href="bookappointment.php"><input type="button" value="Go Back"/>
</form>

</body>
</html>