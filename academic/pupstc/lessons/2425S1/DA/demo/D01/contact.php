<?php
include('connect.php');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ComSoc | Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="shared/css/style.css">
</head>

<body>
  <?php include('shared/assets/banner.php') ?>
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <div class="display-3">
          Contact
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card p-5">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
              aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
              aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">@example.com</span>
          </div>

          <div class="mb-3">
            <label for="basic-url" class="form-label">Your vanity URL</label>
            <div class="input-group">
              <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>
            <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
          </div>

          <div class="input-group">
            <span class="input-group-text">With textarea</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('shared/assets/footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>