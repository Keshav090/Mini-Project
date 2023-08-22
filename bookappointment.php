
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
       </div><br><br><br>
	   <h1 align="center" class="color1"><u>Enter Details to Book Appointment: -</u></h1><br>
<div class="content">
<form action="app_insert.php" method="POST">
<p>
<h3>Name of the patient:
<input type="text" name="patientname" maxlength="10" value="" placeholder="patientname"/></h3>
</p><br>
<p>
<h3>Patient Age :
<input type="number" name="page" value="" min="1" placeholder="Patient Age"/><br/></h3>
</p><br>
<p><h3>
Gender:
<input type="text" name="gender" maxlength="10" value="" placeholder="gender"/>
</h3></p><br>
<p>
<h3>Reason for Appointment:
<input type="textarea" name="reason" value="" placeholder="Enter Reason for Appointment"/><br/></h3>
</p><br>
<p><h3>
Time to visit:
<input type="time" name="time" id="time" min="00:00" max="23:59" value="" /> <br/></h3>
</p><br>


<p>
<a href="appsub.php"><input type="submit" value="Book"/>
<a href="detpage.html"><input type="button" value="Go back to main page"/>
</p>
</form>

</div>
</body>
</html>