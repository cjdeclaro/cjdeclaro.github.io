<?php
session_start();
session_destroy();
session_start();

include "shared/head.php";
?>

<?php
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $_SESSION['access_level'] = 0;
  $_SESSION['first_name'] = '';
  $_SESSION['last_name'] = '';

  $getQuery = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
  $result = executeQuery($getQuery);

  if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
      $_SESSION['access_level'] = $row['access_level'];
      $_SESSION['first_name'] = $row['first_name'];
      $_SESSION['last_name'] = $row['last_name'];
    }
    $_SESSION['username'] = $username;
    header('Location: index.php');
  } else {
    header('Location: login.php?error=TEST');
  }
}
?>

<body>
  <div class="container-fluid">
    <main class="tm-main">
      <div class="row tm-row">
        <form method="POST">
          <label for="username">Username</label>
          <input id="username" type="text" value="" name="username" required>
          <br>
          <label for="password">Password</label>
          <input id="password" type="password" value="" name="password" required>
          <br>
          <button name="login">Login</button>
        </form>
      </div>
    </main>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/templatemo-script.js"></script>
</body>

</html>
