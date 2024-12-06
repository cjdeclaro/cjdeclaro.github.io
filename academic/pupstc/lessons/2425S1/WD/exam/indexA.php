<?php
include("connect.php");

//table: users - enrollmentYear

$query = "SELECT DISTINCT enrollmentYear FROM users";
$result = executeQuery($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($queryRow = mysqli_fetch_assoc($result)) {
        ?>

        <div>
          <?php echo $queryRow['firstname']; ?>
        </div>
        <?php
      }
    }
    ?>

  </div>
</body>

</html>