<<?php 
include "../db.php";
session_start();

if(isset($_SESSION['id'])){

 echo "<script> alert('You already signed in') </script>";
      header("location: ../index.php");
}
if(isset($_POST['submit'])){
$password= $_POST["password"];
$email= $_POST["email"];

$query="select * from userinfo where email= '$email' and password= '$password'  ";
$res=mysqli_query($db, $query);
if(mysqli_num_rows($res)>=1)
{

    echo "<script> alert('Login Successfully') </script>";
    while($rows = mysqli_fetch_array($res)){

    $_SESSION['id']= $rows["id"];
     $_SESSION['name']= $rows["name"];
       
    }
    header("location: ../index.php" );
}
else
{
    echo "<script> alert('Invalid Username and Password') </script>";
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="index.php">
                        <h2 class="form-title">Welcome to GYMHUB</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Does not have an account ? <a href="../sign up/index.php" class="loginhere-link">sign up here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>