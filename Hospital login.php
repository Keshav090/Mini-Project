<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM hospital_registration WHERE hos_name = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         
         header("location: hosloghome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?><html>
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
       </div>

<div class="div">
<h1 class="h1"><u>Hospital Login</u></h1><br>
<form class="form" align="middle" action="" method="POST">

<p>
Enter Id:
<input type="text" name="username" value="" maxlength="20" placeholder="Enter Id"/>
<br/><br>
</p>
<p>
Password:
<input type="password" name="password" value="" maxlength="20" placeholder="password"/><br/><br>
</p>
<p><h4>
<sub>
<input type="checkbox"/>
Remember Me</p><h4><br>
<p>
<a href=""><input type="submit" value="submit" />
<a href="Home.html"><input type="button" value="Visit Home Page" /><br/><p><br>
<div class="links1">
<p><h3>
<sub>
<a href="Hos reg.php">Register?</a><br><br>
<a href="fpassword.php">Forgot password?</a><br><br>
<!--<a href="Feedback.html">Provide Feedback?</a><br><br>-->
<div><?php echo $error; ?></div>
</sub></p></h3></div>
</form>
<script src="non-empty.js"></script>
</div>
</body>
</html>
