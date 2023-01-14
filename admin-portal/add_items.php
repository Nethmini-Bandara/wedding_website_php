<?php session_start(); ?>
<?php require_once('../config.php'); ?>




<?php

if (isset($_POST['submit']) && isset($_FILES['image'])) {

    $image_name = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $errors = $_FILES['image']['error'];

    if($errors === 0){

        if($image_size > 12500000){

            echo "File is too large!";

        }else{

            $img_extension = pathinfo($image_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_extension);

            $allowed_extensions = array("jpg", "jpeg", "png");

            if(in_array($img_ex_lc, $allowed_extensions)){

                $new_img_name = uniqid("PRODUCT_IMG-", true) . "." . $img_ex_lc;
                $img_upload_path = '../assets/jewelary' . $new_img_name;

                move_uploaded_file($tmp_name, $img_upload_path);

                $jname = mysqli_real_escape_string($connection, $_POST['jname']);
                $cno = mysqli_real_escape_string($connection, $_POST['cnumber']);
                //$price = mysqli_real_escape_string($connection, $_POST['description']);
                //$image = mysqli_real_escape_string($connection, $_POST['image']);
                $pdesc = mysqli_real_escape_string($connection, $_POST['description']);
                //$pqty = mysqli_real_escape_string($connection, $_POST['product_qty']);
            
                //names of actual table 
                $query = "INSERT INTO jewellary(j_name, contact_number, j_description) VALUES ('{$jname}', '{$cno}','{$pdesc}')";
            
                $result = mysqli_query($connection, $query);
            
                if($result){
                    echo "Item Added!";
                }

            }

        }

    }else{
        echo "Error occured!";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/d.css">
</head>

<body>
    <center>

    <h1>Add Items</h1>
    <a href="../admin-portal/dashboard.php">Dashboard</a>
<div class="form-container">
    <form action="add_items.php" method="POST" enctype="multipart/form-data">

        Product Name: <input type="text" name="jname" maxlength="50" required>
        <br>
        Contact Number: <input type="text" name="cnumber" maxlength="50" required>
        <br>
        <!-- Product Price: <input type="text" name="description" required>
        <br>
        Product Discount: <input type="text" name="product_discount" required>
        <br> -->
        Product Description: <textarea name="description" rows="4" cols="50" required></textarea>
        <br>
        <select name="gender" id="">
                <option value="gender">Select Gender</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
            </select>
        <!-- Product Quantity: <input type="text" name="product_qty" required>
        <br> -->
        Product Image: <input type="file" name="image" required>
        <br>

        <input type="submit" name="submit" value="Add Product" class="form-btn">

    </form>
    </div>
    </center>

</body>

</html>

<?php mysqli_close($connection); ?>