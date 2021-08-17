<?php
include "../db.php";
session_start();
if(isset($_SESSION['id'])){
 echo "<script> alert('You already signed in') </script>";
      header("location: ../index.php");
}
else if(isset($_POST['submit']))
{
    $name= $_POST["name"];
$password= $_POST["password"];
$re_password= $_POST["re_password"];
$email= $_POST["email"]; 
$address = $_POST['address'];
if($name==""  ||$password==""  ||$re_password==""|| $email=="")
{
    echo "<script> alert('Empty Field') </script>";
      
}

 else if($password!=$re_password)
{
    echo "<script> alert('passwords doesn't match') </script>";
}   
else{  
         $sql="select * from userinfo where email='$email' ";
         $query=mysqli_query($db, $sql);
       if (mysqli_num_rows($query)>=1)
       {
        echo "<script> alert('Email is already exist') </script>";
       }

       else
       {
        if(!$address)
        $address='null';
  
    $sql="insert into userinfo (name, password, email,address) values ('$name', '$password', '$email', '$address')";
    mysqli_query($db,$sql);
    $sql2 = "select * from userinfo where email = '$email'";
            $result = mysqli_query($db,$sql2);
            $alo = mysqli_fetch_assoc($result);
    $_SESSION['id']= $alo["id"];
     $_SESSION['name']= $_POST["name"];
     echo "<script> alert('Registration Completed Successfully') </script>";
     header("location:index.php");
       }





   
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

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
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address" placeholder="Address"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="../sign in/index.php" class="loginhere-link">Login here</a>
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