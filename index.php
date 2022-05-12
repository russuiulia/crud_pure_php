
<!DOCTYPE html>
<html>
<head>
    <title>Russu</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>


<style>
  .slider {
    width: 100%;
    text-align: center;
    overflow: hidden;
  }

  .slides {
    display: flex;
    width: 300px;
    font-size: 1pt !important;
    overflow-x: auto;
    scroll-snap-type: x mandatory;



    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;

    /*
  scroll-snap-points-x: repeat(300px);
  scroll-snap-type: mandatory;
  */
  }

  .slides::-webkit-scrollbar {
    width: 10px;
    height: 10px;
  }

  .slides::-webkit-scrollbar-thumb {
    background: black;
    border-radius: 10px;
  }

  .slides::-webkit-scrollbar-track {
    background: transparent;
  }

  .slides>div {
    scroll-snap-align: start;
    flex-shrink: 0;
    width: 300px;
    height: 300px;
    margin-right: 50px;
    border-radius: 10px;
    background: #eee;
    transform-origin: center center;
    transform: scale(1);
    transition: transform 0.5s;
    position: relative;

    display: flex;
    justify-content: center;
    /* align-items: center; */
    /* font-size: 100px; */
  }

  .slides>div:target {
    /*   transform: scale(0.8); */
  }

  img {
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .slider>a {
    display: inline-flex;
    width: 5rem;
    height: 5rem;
    background: white;
    text-decoration: none;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin: 0 0 0.5rem 0;
    position: relative;
  }

  .slider>a:active {
    top: 1px;
  }

  .slider>a:focus {
    background: #000;
  }

  @supports (scroll-snap-type) {
    .slider>a {
      display: none;
    }
  }
</style>
<body>
  
<?php include 'connection.php';
    session_start();
  ?>
<div class="container">

  <div class="jumbotron jumbotron-fluid"
    style="background-image:url('https://www.thoughtco.com/thmb/Y0u9dMhdSXvKQh10yOBoUu-C7vk=/3435x2576/smart/filters:no_upscale()/abstract-paper-flower-pattern-656688606-5acfba2eae9ab80038461ca0.jpg');background-size: cover;">
    <div class="container text-center text-light">
      <h1 class="display-4">WOoooooO</h1>
      <p class="lead">php</p>
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
</div>
<script></script>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>