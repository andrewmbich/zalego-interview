<?php

$id = $_GET['id'];
require('connection.php');

$sql = "DELETE FROM register WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: zalegoview.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}




?>