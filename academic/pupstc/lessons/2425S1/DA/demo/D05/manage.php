<?php
if (!isset($_COOKIE['email'])) {
  header("Location: login.php");
}

if ($_COOKIE['role']!="admin") {
  header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $_COOKIE['firstName'] . " " . $_COOKIE['lastName'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
  <div class="container">
    <div class="row my-5">
      <div class="col">
        <div class="display-3">
          ADMIN CONSOLE: <?php echo $_COOKIE['firstName'] . " " . $_COOKIE['lastName'] ?>
        </div>
        <a href="login.php">
          <button class="btn btn-primary">
            Logout
          </button>
        </a>
      </div>
    </div>
    <div class="row my-5">
      <div class="col">
        <div class="card p-5">
          <div class="h3 my-4">User Info</div>
          <div>Birthday: <?php echo $_COOKIE['birthDate'] ?></div>
          <div>Phone: <?php echo $_COOKIE['phoneNumber'] ?></div>
          <div>Email: <?php echo $_COOKIE['email'] ?></div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>