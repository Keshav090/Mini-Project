
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
       </div><br><br><br>
<form class="body1" action="insert1.php" method="POST">
<h1  class="color"><u>User Registration:-</u></h1><br>
<div  class="div1">

<p>
<h3>Enter name:  
<input type="text" name="first_name" value="" maxlength="30" placeholder="First name"/><br/>
</p><br>
<p>
<h3>Enter Last Name:
<input type="text" name="last_name" value="" maxlength="30" placeholder="lastname"/><br/></h3>
</p><br>
<p>
<h3>Enter Date of Birth:
<input type="date" name="dob" value="" maxlength="15" placeholder="D.O.B"/><br/></h3>
</p><br>
<p>
<h3>Enter Phone number:
<input type="text" name="phone" value="" maxlength="20" placeholder="phone"/><br/></h3>
</p><br>
<p>
<h3>Enter Mail Id:
<input type="text" name="mail" value="" maxlength="100" placeholder="Mail"/><br/></h3>
</p><br>
<p><h3>
Create Password:
<input type="password" name="password" value="" maxlength="15" placeholder="password"/><br/></h3>
</p><br>
<p><h3>
Re-enter Password:
<input type="password" name="cpassword" value="" maxlength="15" placeholder="password"/><br/></h3>
</p><br>
<p><h3>
State you belong to:
<input type="text" name="state" value="" maxlength="15" placeholder="Enter state"/>
</h3></p><br>
<p><h3>
Select Gender:
<input type="text" name="gender" placeholder="Gender" maxlength="8" value=""/>
</h3></p>
<p><h3><br>
Address:
<input type="text" name="address" style="height:70px" maxlength="100" value="" placeholder="Enter complete Address"/></h3></p>
<p><h4><br>
<sub>
<input type="checkbox"/>
Remember Me</p><h4><br>
<p>
<a href="regsubusr.php"><input type="submit" value="submit"/>
<a href="user login.php"><input type="button" value="visit login page"/>
</p>
</form>

</div>
</body>
</html>