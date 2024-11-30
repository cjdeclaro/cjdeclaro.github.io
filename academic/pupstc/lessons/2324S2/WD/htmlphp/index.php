<?php
  include("db.php");
  $fname = "Jane";
  $lname = "Doe";
  $uname = $_GET['username'];

  if(isset($_POST['createbutton'])){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];

    $insertQuery = "
      INSERT INTO People (first_name, last_name, age)
      VALUES ('$fname','$lname',$age)
    ";
    executeQuery($insertQuery);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .box{
      width: 200px;
      height: 200px;
      background-color: green;
      float: left;
      margin: 20px;
    }

    .createdatacont{
      min-width: 100%;
      float: left;
    }

    .createform{
      margin: auto;
      width: 400px;
      width: 400px;
      padding: 20px;
      text-align: center;
      border: 1px solid black;
      border-radius: 20px;
    }
  </style>
</head>
<body>
  <div>
    <?php
      $getQuery = "SELECT * FROM People";
      $peopleResult = executeQuery($getQuery);

      while ($row = mysqli_fetch_array($peopleResult)) {
    ?>
    <div class="box">
      <?php
        echo $row['first_name']." ".$row['last_name'];
      ?>
    </div>
    <?php
      }
    ?>
  </div>
  <div class="createdatacont">
    <form method="POST" class="createform">
      <input type="text" name="fname" placeholder="First Name">
      <br>
      <br>
      <input type="text" name="lname" placeholder="Last Name">
      <br>
      <br>
      <input type="number" name="age" placeholder="Age">
      <br>
      <br>
      <input type="submit" name="createbutton" value="Submit">
    </form>
  </div>
</body>
</html>
