<?php
include("connect.php");

session_start();
session_destroy();
session_start();

$error = "";

if (isset($_POST['btnLogin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users JOIN userinfo ON users.userInfoID = userinfo.userInfoID WHERE email = '$email' AND password = '$password'";
  $result = executeQuery($query);

  if (mysqli_num_rows($result) > 0) {
    while ($user = mysqli_fetch_assoc($result)) {
      $_SESSION['firstName'] = $user['firstName'];
      $_SESSION['lastName'] = $user['lastName'];
      $_SESSION['birthDate'] = $user['birthDate'];
      $_SESSION['phoneNumber'] = $user['phoneNumber'];
      $_SESSION['email'] = $user['email'];
    }
    echo "NANDITO";
    header("Location: index.php");
  } else {
    $error = "Not found";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <?php if ($error == "Not found") { ?>

      <div class="row">
        <div class="col">
          <div style="height: 50px" class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
              <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
              User not found.
            </div>
          </div>
        </div>
      </div>

    <?php } ?>

    <div class="row my-5">
      <div class="col">
        <div class="card p-3 text-center rounded-5 shadow">
          <div class="h3 mb-5">Login</div>
          <form method="POST">
            <input class="my-3 form-control" placeholder="Email" name="email" type="email">
            <input class="my-3 form-control" placeholder="Password" name="password" type="password">
            <button class="my-5 btn btn-primary" name="btnLogin">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>