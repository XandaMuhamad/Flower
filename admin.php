<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "flora2";
    
    session_start();

    $data=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$data){
          die('Could not Connect MySql Server:' .mysql_error());
        }

if ($_SERVER["REQUEST_METHOD"]=="POST")
{

$username=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT * FROM dis where username='".$username."' AND password='".$password."' ";

$result = mysqli_query($data, $sql);
$row = mysqli_fetch_array($result);

if($row["usertype"]=="admin")
{
  $_SESSION["username"]=$username;

  header("location:displayall.php");
  
} 
elseif($row["usertype"]=="user")
{
  $_SESSION["username"]=$username;

  header("location:displayall.php");
 
}
else
{
  echo "incorrect Username or password";
}

}

?>


<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login Page</title>
</head>
 
<body>
    <form action="displayall.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
</body>
 
</html>