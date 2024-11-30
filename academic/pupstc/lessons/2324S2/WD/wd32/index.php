<?php
include "connect.php";
?>

<html>

<head>
  <style>
    .product {
      width: 300px;
      height: 500px;
      margin: 10px;
      border: 1px solid black;
      float: left;
      text-align: center;
      padding: 10px;
      border-radius: 20px;
    }

    .image {
      width: 100%;
      height: 200px;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <?php
  $query = "SELECT * FROM products";
  $results = executeQuery($query);

  while ($row = mysqli_fetch_assoc($results)) {
    ?>
    <div class="product">
      <img class="image" src="products/<?php echo $row['filename']?>">
      <?php echo $row['name']?>
    </div>
  <?php
  }
  ?>
</body>

</html>