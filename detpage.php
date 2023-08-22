<html>
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospitals Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
        <div class="nav">
            <div  class="logo" >
                <img src="logo.jpg"> <h1 style="font-family:sansserif;">  Hospitals <br><span>Portal</span></h1>  
            </div>
       </div><br>
	   <h1 align="center" class="color1"><u>Hospital Details</u></h1>
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


$sql = "SELECT hos_name,v_beds,o_beds,n_beds,vac_rooms,from_time,to_time,emergency FROM hos_details WHERE hos_name='apollo'";
$result = mysqli_query($conn, $sql);
//$hos_name=$_POST["hos_name"];
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		//"<form><p><h3>Name of the hospital : " echo "<h3>" .$row["hos_name"]. "<br>";
        echo "<h2>","Hospital Name: " . $row["hos_name"]. " <br> Ventilator Beds Available: " . $row["v_beds"]. "<br>Oxygen Beds Available: " . $row["o_beds"]. "<br>Normal Beds" . $row["n_beds"]. "<br>Vacant Rooms" . $row["vac_rooms"]. "<br>OP start Time: " . $row["from_time"]. "<br>OP End Time: " . $row["to_time"]. "<br>Emergency Service Available: " . $row["emergency"]. "<br>","</h2>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
<form>
<p>
<!--<h3>Name Of the Hospital :<?php echo "<h3>".$hos_name. "</h3>","<br>";?>
<input type="text" name="hosname" value="" placeholder="Hospital name"/>
</p><br>
<u> Beds Availability </u><br><br>
<p>
<h3>No. of ventilator Beds Availale :
<input type="number" name="ventbeds" value="" min="1" placeholder="ventilator beds"/><br/></h3>
</p><br>
<p>
<h3>No. of Oxygen Beds Availale:
<input type="number" name="oxbeds" value="" min="1" placeholder="Oxygen Beds"/><br/></h3>
</p><br>
<p>
<h3>No. of Normal beds Availale:
<input type="number" name="norbeds" value="" min="1" placeholder="Normal beds"/><br/></h3>
</p><br>
<p>
<h3>Vacant Rooms :
<input type="number" name="roomcount" value="" min="1" placeholder="Room Count"/><br/></h3>
</p><br>
<u> Timings </u><br><br/>
<p><h3>
OP Timings :
<input type="time" name="start time" id="stime" min="00:00" max="23:59" value="" /> to <input type="time" name="End time" id="stime" min="00:00" max="23:59" value="" /><br/></h3>
</p><br>
<p><h3>
Emergency Service :

<br/></h3>
</p>-->
<div class="">
<div class="donate">
<a href="bookappointment.php" target="_blank">Book Appointment</a>
</div>
<div class="pad">
<a href="userhome.php"><input type="button" value="Go back to Homepage"/></a>
</div></form>

</div>
</body>
</html>