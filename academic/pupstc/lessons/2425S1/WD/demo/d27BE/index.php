<?php
include("connect.php");
include("classes.php");

$cards = array();

$articlesQuery = "SELECT * FROM tcsarticles";
$articlesResult = executeQuery($articlesQuery);

while($articleRow = mysqli_fetch_assoc($articlesResult)){
  array_push($cards, new Card(
    $articleRow['articleID'],
    $articleRow['headline'],
    $articleRow['description']
  ));
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Component</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <?php foreach($cards as $card) { ?>
        <div class="col-6">
          <?php echo $card->buildCard() ?>
        </div>
      <?php } ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>