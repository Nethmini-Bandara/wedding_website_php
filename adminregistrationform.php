<?php
@include 'config.php';

if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM admin_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($connection, $select);

    

    if(mysqli_num_rows($result)>0){
        $error[] = 'User already exists!';
    }
    else{
        if($pass != $cpass){
            $error[] = 'Password not Matched!';
        }
        else{
            
                $insert = "INSERT INTO admin_form(name, email, password) VALUES('$name', '$email', '$pass')";
                mysqli_query($connection, $insert);
                header('location:adminloginform.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register Form</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php @include './wedding_planing/firstheading.php'; ?>
    <div class="form-container">
        
        <form action="" method="post">
            <h3>Register Me as an Admin</h3>

            <?php

                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class = "error-msg">' .$error. '</span>';
                    }
                }
            ?>

            <input type="text" name="name" require placeholder="Enter your Name">
            <input type="email" name="email" require placeholder="Enter your Email">
            <input type="password" name="password" require placeholder="Enter your Password">
            <input type="password" name="cpassword" require placeholder="Confirm your password">
            <select name="gender" id="">
                <option value="phottography">Select Gender</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
            </select>
            <br>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="adminloginform.php">Log In Now</a></p>
        </form>
    </div>
</body> 
</html>