<?php
include("connect.php");

session_start();
session_destroy();
session_start();

if (isset($_POST['btnLogin'])) {
  $username = $_POST['uname'];
  $password = $_POST['password'];

  $loginQuery = "SELECT * FROM users WHERE (userName = '$username' OR email = '$username' OR phoneNumber = '$username') AND password = '$password'";
  $loginResult = executeQuery($loginQuery);

  $_SESSION['userID'] = "";
  $_SESSION['userName'] = "";
  $_SESSION['email'] = "";
  $_SESSION['phoneNumber'] = "";
  $_SESSION['role'] = "";
  $error = "";

  if (mysqli_num_rows($loginResult) > 0) {
    while ($user = mysqli_fetch_assoc($loginResult)) {
      $_SESSION['userID'] = $user['userID'];
      $_SESSION['userName'] = $user['userName'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['phoneNumber'] = $user['phoneNumber'];
      $_SESSION['role'] = $user['role'];
      header("Location: ./");
    }
  } else {
    $error = "NO USER";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Misinjir | Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-12 col-lg-7 mx-auto">

        <?php if ($error == "NO USER") { ?>
          <div class="alert alert-danger mb-3" role="alert">
            No user found
          </div>
        <?php } ?>

        <form method="POST">
          <div class="card p-5 shadow rounded-5">
            <div class="h3 my-4 text-center">
              Misinjir Login
            </div>
            <div class="mb-3">
              <label for="uname" class="form-label">Username or Email or Phone</label>
              <input type="text" id="uname" class="form-control" name="uname" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" class="form-control" name="password" required>
            </div>
            <div class="mb-3 text-center">
              <button class="btn btn-primary py-3 px-5 rounded-5" name="btnLogin">Log in</button>
              <a href="register.php">
                <button type="button" class="btn btn-secondary py-3 px-5 rounded-5">Rijistir</button>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include("shared/assets/brand.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>