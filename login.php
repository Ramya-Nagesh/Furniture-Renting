<html>
<title>Login</title>
<style>
body {
background-image: url("blue-brick-wall-chair-1282315.jpg");
background-repeat: no-repeat;
background-size: 100% 100%}
</style> 
  <?php
  $usr = "admin";
  $psw = "password";
  $username = '$_POST[username]';
  $password = '$_POST[password]';
  session_start();
  if ($_POST['username']=="admin" && $_POST['password']=="password")
 {
    $_SESSION['login']=true;
header("Location: menu.html"); 
    exit; 
}
    else 
    {
      echo "<b> <font size=6>Incorrect Username or Password</font></b>" ;
    }
    ?>
</body>
</html>