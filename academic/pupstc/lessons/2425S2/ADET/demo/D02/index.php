<?php
include("connect.php");
include("functions.php");

$username = "johndoe";
$userId = "1";

// PREFERENCES
$theme = getPreference("light",$userId, "theme");
$fw = getPreference("normal",$userId, "fw");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toktik | Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      font-weight: <?php echo $fw ?>;
    }
  </style>
</head>

<body data-bs-theme="<?php echo $theme ?>">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TokTik | <?php echo $username ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col text-center p-5" style="background-color: black; color: cyan">
        <div class="h1">TokTik</div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row my-5">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mt-3">
          <img src="img/pikachu.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mt-3">
          <img src="img/pikachu.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mt-3">
          <img src="img/pikachu.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mt-3">
          <img src="img/pikachu.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mt-3">
          <img src="img/pikachu.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mt-3">
          <img src="img/pikachu.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>