<?php
@include 'config.php';

if(isset($_POST['submit'])){
    
    //$name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $pass = md5($_POST['password']);
    //$cpass = md5($_POST['cpassword']);
    //$user_type = $_POST['user_type'];

    $select = "SELECT * FROM admin_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($connection, $select);
    
    if(mysqli_num_rows($result)>0){
       
            //$row = mysqli_fetch_array($result);

            //$_SESSION['email'] == $row['email'];
            header('location: admin-portal/dashboard.php');
    }else{
        $error[] = 'incorrect email or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Form</title>
// admin login form 2
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php @include './wedding_planing/firstheading.php'; ?>
    <div class="form-container">
        
        <form action="" method="post">
            <h3>Admin Log In</h3>
            //admin login
            <?php

if(isset($error)){
    foreach($error as $error){
        echo '<span class = "error-msg">' .$error. '</span>';
    }
}
?>

            <input type="email" name="email" required placeholder="Enter your Email" id="">
            <input type="password" name="password" required placeholder="Enter your Password" id="">
            <input type="submit" name="submit" value="Log In Now" class="form-btn" id="">
            <p>Don't have an account? <a href="adminregistrationform.php">Register Now</a></p>
        </form>
    </div>
</body>
</html>