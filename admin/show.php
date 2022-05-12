

<!DOCTYPE html>
<html>
<head>
    <title>Russu</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<?php 
          include '../connection.php';
          $productID=$_GET["product"];
         
          $productDetail=mysqli_fetch_assoc(  mysqli_query($connection,"SELECT * FROM products WHERE id='$productID'"));
  ?>

<div class="container">

<br><br><br>

    <div class="row">
        <div class="col-lg-12 margin-tb">
              <div class="text-center">
                <a class="btn btn-outline-primary" href="./index.php"> Înapoi</a>
            </div><br><br>
            <div class="text-center">
                <h2>Detaliile produsului</h2>
                <br>
            </div>
          
        </div>
    </div>
   
    <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titlu:</strong>
               <?php  echo  $productDetail["name"];?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagine:</strong>
              <p> <?php  echo  $productDetail["image"];?></p>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descriere:</strong>
                <?php  echo  $productDetail["detail"];?>

            </div>
        </div>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>