<?php
include("connect.php");

session_start();

$_SESSION['userID'] = "";
$_SESSION['userName'] = "";
$_SESSION['email'] = "";
$_SESSION['phoneNumber'] = "";
$_SESSION['role'] = "";
$_SESSION['fname'] = "";
$_SESSION['lname'] = "";

$error = "";

if (isset($_POST['btnRegister'])) {
  $username = $_POST['uname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

  if($password == $cpassword){
    $userInfoQuery = "INSERT INTO userinfo(firstName, lastName) VALUES ('$fname', '$lname')";
    executeQuery($userInfoQuery);

    $lastInsertedId = mysqli_insert_id($conn);

    $userQuery = "INSERT INTO users(userName, password, email, phoneNumber, userInfoID) VALUES ('$username', '$password', '$email', '$phone', '$lastInsertedId')";
    executeQuery($userQuery);

    $lastInsertedId = mysqli_insert_id($conn);

    $_SESSION['userID'] = $lastInsertedId;
    $_SESSION['userName'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['phoneNumber'] = $phone;
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;

    header("Location: index.php");
  } else {
    $error = "PASSWORD UNMATCHED";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Misinjir | Rijister</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-12 col-lg-7 mx-auto">

        <?php if ($error == "PASSWORD UNMATCHED") { ?>
          <div class="alert alert-danger mb-3" role="alert">
            Passwords does not match
          </div>
        <?php } ?>

        <form method="POST">
          <div class="card p-5 shadow rounded-5">
            <div class="h3 my-4 text-center">
              Misinjir Rijistir
            </div>
            <div class="mb-3">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" id="fname" class="form-control" name="fname" required>
            </div>
            <div class="mb-3">
              <label for="lname" class="form-label">Last Name</label>
              <input type="text" id="lname" class="form-control" name="lname" required>
            </div>
            <div class="mb-3">
              <label for="uname" class="form-label">Username</label>
              <input type="text" id="uname" class="form-control" name="uname" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" id="phone" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" class="form-control" name="password" required>
            </div>
            <div class="mb-3">
              <label for="cpassword" class="form-label">Confirm Password</label>
              <input type="password" id="cpassword" class="form-control" name="cpassword" required>
            </div>
            <div class="mb-3 text-center">
              <a href="login.php">
                <button type="button" class="btn btn-secondary py-3 px-5 rounded-5">Back</button>
              </a>
              <button class="btn btn-primary py-3 px-5 rounded-5" name="btnRegister">Submit</button>
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