<?php
include '../connection.php';
session_start();

  $title = stripslashes($_REQUEST['name']);
  $title = mysqli_real_escape_string($connection, $title);
  $detail    = stripslashes($_REQUEST['detail']);
  $detail    = mysqli_real_escape_string($connection, $detail);
  $image    = stripslashes($_REQUEST['image']);
  $image    = mysqli_real_escape_string($connection, $image);
  $product_id    = rand(10, 1000);
  $query    = "INSERT into `products` (id, name, detail, image)
               VALUES ('".$product_id."', '" . $title . "', '$detail', '$image')";
  $result   = mysqli_query($connection, $query);
  if ($result) {
        header('Location: ' .'index.php');

  } else {
      echo "<div class='form'>
            Error
            </div>";
  }
?>