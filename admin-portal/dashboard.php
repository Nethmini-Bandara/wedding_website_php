<?php session_start(); ?>

<?php require_once('../config.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>

    <center>
        <div>
        <h1>Dashboard</h1>
        <a href="../wedding_planing/home.php">Home</a>
        </div>
        
        <br>

        <div class="gridContainer">

            <a href="items_list.php">
                <div>
                    <p>Jewellary shops</p>
                    <img src="../assets/jewellary/j-removebg-preview.png">
                </div>

            </a>
            <a href="add_items.php">
                <div>
                <p>Add Products</p>
                <img src="../assets/icons/add.png">
                </div>
            </a>

            <!-- <a href="orders.php">
                <div>
                    <P>Orders</P>
                    <img src="../assets/icons/orders.png">
                </div>
            </a> -->

            <a href="users.php">
                <div>
                    <p>Users</p>
                    <img src="../assets/icons/users.png">
                </div>
            </a>

            <a href="salon_app.php">
                <div>
                    <p>Salon Appoinments</p>
                    <img src="../assets/jewellary/j-removebg-preview.png">
                </div>
            </a>
            
            <!-- <a href="favorites.php">
                <div>
                    <p>Favorites</p>
                    <img src="../assets/icons/favorites.png">
                </div>
            </a> -->

        </div>

    </center>

</body>

</html>

<?php mysqli_close($connection); ?>