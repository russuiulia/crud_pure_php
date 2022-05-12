<?php
include '../connection.php';
$title = stripslashes($_REQUEST['name']);
$title = mysqli_real_escape_string($connection, $title);
$id = stripslashes($_REQUEST['id']);
$id = mysqli_real_escape_string($connection, $id);
$detail    = stripslashes($_REQUEST['detail']);
$detail    = mysqli_real_escape_string($connection, $detail);
$image    = stripslashes($_REQUEST['image']);
$image    = mysqli_real_escape_string($connection, $image);
  $query    = 'UPDATE `products` SET name="'.$title.'", detail="'.$detail.'", image="'.$image.'" where id="'.$id.'"';;
  $result   = mysqli_query($connection, $query);
  if ($result) {
        header('Location:show.php?product='.$id);

  } else {
        echo  mysqli_error($connection);
  }
?>