<?php
include("connect.php");

//table users - userID(auto incerement), firstName, lastName

if (isset($_POST['btnSumbit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $fullname = $fname . " " . $lname;

  $query = "INSERT INTO users(firstName, lastName) VALUES ('$fname', '$lname')";
  executeQuery($query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    <input type="text" name="fname" required>
    <input type="text" name="lname" required>
    <button type="submit" name="btnSubmit">submit</button>
  </form>
</body>

</html>