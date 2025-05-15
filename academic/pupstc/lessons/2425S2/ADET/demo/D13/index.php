<?php
  include("connect.php");

  $page = 1;
  $itemsPerPage = 5;

  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }

  $offset = ($page - 1) * $itemsPerPage;

  $query = "SELECT * FROM products LIMIT $itemsPerPage OFFSET $offset";
  $queryResult = executeQuery($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>

  <body>
    <div class="container-fluid shadow py-3">
      <div class="row">
        <div class="col">
          <div class="h3 text-center">
            Page <?php echo $page ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">

        <?php
          while($productRow = mysqli_fetch_assoc($queryResult)){
        ?>

        <div class="col-6 col-md-4 col-lg-3">
          <div class="card my-3 p-3 rounded-3">
            <?php echo $productRow['name'] ?>
          </div>
        </div>

        <?php
          }
        ?>

      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>
