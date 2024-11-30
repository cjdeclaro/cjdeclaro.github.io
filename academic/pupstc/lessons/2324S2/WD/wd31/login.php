<?php
session_start();
session_destroy();
session_start();

include "connect.php";

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
  $result = executeQuery($query);
  
  if(mysqli_num_rows($result) > 0){
    $_SESSION["loggedin"] = "true";

    header("Location: index.php");
  } else {
    echo "NO USER FOUND";
  }
}

?>

<html>
  <head>

  </head>
  <body>
    <form method="post">
      <label for="username">Username</label>
      <input id="username" type="text" name="username" required>

      <br>

      <label for="password">Password</label>
      <input id="password" type="password" name="password" required>

      <br>

      <button name="login">Submit</button>
    </form>
  </body>
</html>
