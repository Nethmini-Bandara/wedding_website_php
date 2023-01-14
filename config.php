<?php

$connection = mysqli_connect('localhost', 'root', '','wedding_db');

if(mysqli_connect_errno()){
    die('Database failed to connect! '.mysqli_connect_error().'<br>');
}else{
    // echo "Database succussfuly connected! <br>";
}

?>