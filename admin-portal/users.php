<?php session_start(); ?>

<?php require_once('../config.php'); ?>


<?php



$user_list = "";
$query = "SELECT userId, name, email FROM user_form ORDER BY userID";
$users = mysqli_query($connection, $query);

if ($users) {
    while ($user = mysqli_fetch_assoc(($users))) {

        //$_GET['u_id'] = $user['userID'];

        $user_list .= "<tbody class=\"table-hover\">";
        $user_list .= "<tr>";
        $user_list .= "<td class=\"text-left\"> {$user['userId']} </td>";
        $user_list .= "<td class=\"text-left\"> {$user['name']} </td>";
        $user_list .= "<td class=\"text-left\"> {$user['email']} </td>";
        //$user_list .= "<td class=\"text-left\"> {$user['last_login']} </td>";
        //$user_list .= "<td class=\"text-left\"> <a href=\"user_profile.php?user_id={$_GET['u_id']}\"> Go to profile </a> </td>";
        //$user_list .= "<td class=\"text-left\"> <a href=\"components/delete_user.php?user_id={$user['userID']}\"onclick = \"return confirm('Are you sure to delete?');\"> Delete </a> </td>";
        $user_list .= "</tr>";
        $user_list .= "</tbody>";
    }
} else {
    echo "Datbase failed!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="css/tables.css">
    <link rel="stylesheet" href="./css/d.css">
</head>

<body>
    <main>

        <div class="table-title">
            <h3>Users List</h3>
            <a href="./dashboard.php">Dashboard</a>
        </div>
        <table class="table-fill1">
            <tr>
                <th class="text-left">Customer ID</th>
                <th class="text-left">Customer Name</th>
                <th class="text-left">Email</th>
                <!-- <th class="text-left">Last Login</th>
                <th class="text-left">Profile</th>
                <th class="text-left">Remove</th> -->
            </tr>
            <?php echo $user_list; ?>
        </table>

    </main>
</body>

</html>

<?php mysqli_close($connection); ?>