<?php
session_start();
session_destroy();
session_start();

include("connect.php");

$error = "";

if (isset($_POST['btnLogin'])) {
  $uname = $_POST['uname'];
  $password = $_POST['password'];

  $userQuery = "SELECT * FROM users WHERE (userName = '$uname' OR email='$uname' OR phoneNumber = '$uname') AND password = '$password'";
  $userResult = executeQuery($userQuery);

  if (mysqli_num_rows($userResult) > 0) {
    while($userRow = mysqli_fetch_assoc($userResult)){
      $_SESSION['currentUser'] = $userRow['userID'];
      header("Location: index.php");
    }
  } else {
    $error = "no_user";
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body id="body" data-bs-theme="light">
  <div class="container">
    <div class="row my-5">
      <div class="col-12 col-md-6 mx-auto">

        <?php if ($error == "no_user") { ?>

          <div class="alert alert-danger rounded-2" role="alert">
            No user found
          </div>

        <?php } ?>

        <form method="post">
          <div class="card p-5 rounded-5">
            <div class="h3 text-center mb-5">
              Login
            </div>

            <div class="mb-3">
              <label for="uname">Username or email or phone number</label>
              <input type="text" id="uname" name="uname" class="form-control" required>
            </div>

            <div class="mb-5">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="text-center">
              <button name="btnLogin" class="btn btn-primary">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include("assets/shared/footer.php"); ?>
</body>

</html>