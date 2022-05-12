
<!DOCTYPE html>
<html>
<head>
    <title>Russu</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<br><br>
<div class="row">
  <br><br>
  <div class="col-lg-12 margin-tb">
    <div class="text-center">
      <h2>Admin</h2>
    </div>

  </div>
</div>
<?php include '../connection.php';
    session_start();
?>

<br>
<div class="text-center">
  <a class="btn btn-success" href="./create.php">Adaugă</a>
</div>
<br>
<div class="container">
  <div class="row">

  <?php
        $sql=mysqli_query($connection,"SELECT * FROM products");
        while ($row=mysqli_fetch_assoc($sql)) {
          echo '<div class="col-md-4 text-center">';
          echo '<div class="card" style="width: 18rem;">';
          echo '<img class="card-img-top"src="'.$row["image"].'" alt="">';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">'.$row["name"].'</h5>';
          echo '<p class="card-text">'.$row["detail"].'</p>';
          echo '<form action="" method="POST">';
          echo '<a class="btn btn-outline-info" href="./show.php?product='.$row["id"].'">Arată</a>';
          echo '<a class="btn btn-outline-primary" href="./update.php?product='.$row["id"].'">Editează</a>';
          // echo '<button type="submit" class="btn btn-outline-danger">Șterge</button>';
          echo '<a class="btn btn-outline-danger" href="./deleteProduct.php?product='.$row["id"].'">Șterge</a>';
          echo '</form>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
       ?>

  </div>
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>