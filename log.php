
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $mail = mysqli_real_escape_string($db,$_POST['mail']);
      $pwd = mysqli_real_escape_string($db,$_POST['pwd']); 
      
      $sql = "SELECT * FROM db WHERE mail = '$mail' and pwd = '$pwd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
		 $_SESSION['loggedin'] = TRUE;
     $_SESSION['login_user'] = $mail;
         
echo "<script>alert('Login Successful');window.location.href='profile.php';</script>";
	}
	  else
	  {
         echo "<script>alert('Your Login Name or Password is invalid');window.location.href='index.php';</script>";
		 exit();
      }
   }	


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <h1 class="opacity">LOGIN</h1>
                <form id="reg" method="post">
                    <input type="text" name="mail" placeholder="MAIL" />
                    <input type="password" name="pwd" placeholder="PASSWORD" />
                    <button class="opacity" name="reg" type="submit">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a href="index.php">Register</a>
                    <a href="">Forgot Password</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>


</body>
<!-- partial -->
  <script  src="./script.js"></script>
  

</body>
</html>
