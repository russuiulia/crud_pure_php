<?php
include '../connection.php';

$id = $_GET['product'];
$query="DELETE FROM products where id=$id";
$result   = mysqli_query($connection, $query);
if ($result) {
      header('Location: ' . 'index.php');

} 
?>