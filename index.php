<!DOCTYPE html>
<html>

<head>
  <title>Russu</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  </script>
  <link rel="stylesheet" href="index.css">
</head>

<body>

  <?php include 'connection.php';
    session_start();
  ?>
  <div class="container-fluid">

    <div class="jumbotron jumbotron-fluid" id="header"
      style="background-image:url('https://www.thoughtco.com/thmb/Y0u9dMhdSXvKQh10yOBoUu-C7vk=/3435x2576/smart/filters:no_upscale()/abstract-paper-flower-pattern-656688606-5acfba2eae9ab80038461ca0.jpg');background-size: cover;">

      <nav class="navbar navbar-expand-lg navbar-dark justify-content-end container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Hidden brand</a>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>

        </div>
      </nav>
      <div class="container text-center text-light">
        <h1 class="display-4">WOoooooO</h1>
        <p class="lead">php</p>
      </div>
    </div>

    <div class="container">
      <h2 class="text-center">Text</h2>
      <div class="row">
        <div class="col col-lg-4 col-sm-12 d-flex justify-content-center">
          <div class="card " style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col col-lg-4 col-sm-12 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col col-lg-4 col-sm-12 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="slider">
      <?php
        $sql=mysqli_query($connection,"SELECT * FROM products");
        while ($row=mysqli_fetch_assoc($sql)) {
        echo '<a href="#slide-'.$row["id"].'"><img src="'.$row["image"].'" alt=""></a>';
        }
       ?>

      <div class="slides" style="margin-left:auto;margin-right:auto">
        <?php
        $sql=mysqli_query($connection,"SELECT * FROM products");

        while ($row=mysqli_fetch_assoc($sql)) {
        echo '<div id="slide-'.$row["id"].'" class="card" style="width: 18rem;">';
        echo '<img class="card-img-top" style="max-height:50%" src="'.$row["image"].'" alt="Card image cap">';
        echo '<div class="card-body">';
        echo '<p class="card-text" style="padding-top: 140px;font-size:12pt">';
        echo '<b>Titlu:</b>'.$row["name"];
        echo '<br>';
        echo '<b>Descriere:</b>'.$row["detail"];
        echo '</div>';
        echo '</div>';
        }
       ?>

      </div>

    </div>
<div class="jumbotron jumbotron-fluid" id="footer">
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Hidden brand</a>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>

        </div>
      </nav>
    <!-- <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
  </div>
</div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>