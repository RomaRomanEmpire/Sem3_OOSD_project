<?php
// Initialize the session
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $con = DB_OP::get_connection();
      $stat = $con->login_attempt($_POST["username"],$_POST["password"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <div class="background_image">
            <div class="Back_img">
                  <div>
                        <img src="Image/C.jpg" >
                  </div>
            </div>
      </div>

      <div class="loginbox" >
            <img src="Image/icon.png" class="Idimage" >
            <br>
            <h1 >Login Here</h1>
            <br>
            <form id="signin-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                  <p>Username or Email address</p>
                  <input type="text" name="username" placeholder="enter username or email">
                  <p>Password</p>
                  <input type="password" name="password" placeholder="Enter Password">
                  <br><br>
                  <input type="submit" value="Login">

                  <br>
                  <a href="a">Forget password</a><br>
                  <a href="Create_Account.html">If you don't have account!!!</a>
            </form> 
      </div>
</body>
</html>