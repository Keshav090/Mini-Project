<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
        <div class="nav">
            <div  class="logo">
                <img src="logo.jpg"> <h1 style="font-family:sansserif;"> Hospitals <br><span>Portal</span></h1>  
            </div>
	    </div><br><br>
<h1 align="center" class="color1"><u>Enter Details: -</u></h1><br>
<div class="content">
<form action="hos_insert.php">
<p>
<h3>Hospital Name:
<input type="text" name="hosname" value="" placeholder="name"/>
</p><br>
<u> Beds Availability </u><br><br/>
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
<h3>Vacant Room Count:
<input type="number" name="roomcount" value="" min="1" placeholder="Room Count"/><br/></h3>
</p><br>
<u> Timings </u><br><br/>
<p><h3>
OP start time:
<input type="time" name="starttime" id="stime" min="00:00" max="23:59" value="" /> to <br>
OP End Time:
<input type="time" name="endtime" id="stime" min="00:00" max="23:59" value="" /><br/></h3>
</p><br>
<p><h3>
Emergency Service Available: -
<input type="text" name="service" value="" placeholder="Yes/No" />

<br/></h3>
</p><br>

<p>
<a href="regsubhos.php"><input type="submit" value="Submit"/>
<a href="Hospital login.php"><input type="button" value="Back to login page"/>
</p>
</form>

</div>
</body>
</html>
			