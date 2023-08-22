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
       </div><br><br>
<form class="body1" action="insert.php">

<h1 class="color"><u>Hospital Registration:-</u></h1><br>	
<div class="div1">
<p>
<h3>Name of  the Hospital: 
<input type="text" name="hospital_name" value="" maxlength="30" placeholder="Hospital Name"/><br/><br>
</p>
<p>
<h3>Admin Name:
<input type="text" name="admin_name" value="" maxlength="30" placeholder="Admin Name"/><br/></h3><br>
</p>
<p>
<h3>Hospital Phone number:
<input type="text" name="phone" value="" maxlength="10" placeholder="phone"/><br/></h3><br>
</p>
<p>
<h3>Official Mail Id:
<input type="text" name="mail" value="" maxlength="100" placeholder="Mail"/><br/></h3><br>
</p>
<p><h3>
Create Password:
<input type="password" name="password" value="" maxlength="15" placeholder="password"/><br/></h3><br>
</p>
<p><h3>
Re-Enter Password:
<input type="password" name="cpassword" value="" maxlength="15" placeholder="password"/><br/></h3><br>
<p><h3>
State you belong to:
<input type="text" name="state" value="" maxlength="15" placeholder="Enter state"/>
</h3></p><br>
<p><h3>
Address:
<input type="text" name="address" style="height:70px" value="" placeholder="Enter complete Address"/></h3></p><br>
<p><h4>
<sub>
<input type="checkbox"/>
Remember Me</p><h4><br>
<p>
<a href="regsubhos.php"><input type="submit" value="Register"/>
<a href="Hospital login.php"><input type="button" value="visit login page"/>
</p><br>
</form>
</div>
</body>
</html>