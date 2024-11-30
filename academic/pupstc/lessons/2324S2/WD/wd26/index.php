<?php
  include 'connect.php';

  function enclose($str1, $str2, $separator, $isImportant){
    if($isImportant){
      return "<b>$str1$separator $str2</b>";
    } else {
      return "$str1$separator $str2";
    }
  }

  $query = "SELECT * FROM Users JOIN Addresses ON Users.address_id = Addresses.id";
  $users = executeQuery($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WD26</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>PHP Integration</h2>
      <table class="table">
        <tr>
          <th>id</th>
          <th>Full Name</th>
          <th>Address</th>
        </tr>
        <?php
          while($user = mysqli_fetch_assoc($users)){
        ?>
        <tr>
          <td><?php echo $user['id'] ?></td>
          <td><?php echo enclose($user['first_name'], $user['last_name'], "", true) ?></td>
          <td><?php echo enclose($user['city'], $user['province'], ",", false) ?></td>
        </tr>
        <?php
          }
        ?>
      </table>
    </div>
  </body>
</html>
