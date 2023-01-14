<?php session_start(); ?>

<?php require_once('../config.php'); ?>


<?php

$product_list = "";

$query = "SELECT * FROM salon_app ORDER BY app_id";

$products = mysqli_query($connection, $query);

if ($products) {
    while ($product = mysqli_fetch_assoc($products)) {

        // $_GET['j_id'] = $product['product_id'];
        // //$_GET['product_brand'] = $product['product_brand'];
        // $_GET['j_name'] = $product['product_name'];

        $product_list .= "<tbody class=\"table-hover\">";
        $product_list .= "<tr>";
        $product_list .= "<td class=\"text-left\"> {$product['app_id']} </td>";
        //$product_list .= "<td class=\"text-left\"> {$product['product_brand']} </td>";
        $product_list .= "<td class=\"text-left\"> {$product['s_name']} </td>";
        $product_list .= "<td class=\"text-left\"> {$product['s_email']} </td>";
        $product_list .= "<td class=\"text-left\"> {$product['con_no']} </td>";
        $product_list .= "<td class=\"text-left\"> {$product['description']} </td>";
        // $product_list .= "<td class=\"text-left\"> {$product['j_image']} </td>";
        //$product_list .= "<td class=\"text-left\"> {$product['ratings']} </td>";
        //$product_list .= "<td class=\"text-left\"> <a href=\"item.php?item_id={$_GET['product_id']}&item_brand={$_GET['product_brand']}&item_name={$_GET['product_name']}\"> go to this product </a> </td>";
        //$product_list .= "<td class=\"text-left\"> <a href=\"components/delete_item.php?item_id={$product['product_id']}\" onclick = \"return confirm('Are you sure to delete?');\"> Delete </a> </td>";
        //item_id is the parameter passing linked page
        $product_list .= "</tr>";
        $product_list .= "</tbody>";
    }
} else {
    echo "DB Failed!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item List</title>
    <link rel="stylesheet" href="css/tables.css">
    <link rel="stylesheet" href="./css/d.css">
</head>

<body>
    <div class="table-title">
        <h3>Products List</h3>
        <a href="add_items.php">add products+</a>
        <br>
        <a href="./dashboard.php">Dashboard</a>
    </div>
   
    <table class="table-fill">
        <tr>
            <th class="text-left">Salon Appoinments</th>
            <th class="text-left">Name</th>
            <th class="text-left">Email</th>
            <th class="text-left">Contact Number</th>
            <!-- <th class="text-left">Price</th> -->
            <!-- <th class="text-left">Description</th> -->
            <th class="text-left">Descriptipn</th>
            <!-- <th class="text-left">Image</th> -->
            <th class="text-left">Image</th>
            <!-- <th class="text-left">Ratings</th> -->
            <!-- <th class="text-left">Modify Product</th> -->
            <!-- <th class="text-left">Remove</th> -->
        </tr>
        <tr>
            <?php echo $product_list; ?>
        </tr>
    </table>

</body>

</html>

<?php mysqli_close($connection); ?>