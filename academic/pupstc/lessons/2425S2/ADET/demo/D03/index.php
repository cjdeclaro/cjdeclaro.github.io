<?php
$results = array();

$numberOfBalls = 2;
$maxNumber = 40;
$canRepeat = false;

$probabilty = $maxNumber;
for($i = 1; $i < $numberOfBalls; $i++){
  $probabilty *= $probabilty - $i;
}

for ($i = 0; $i < $numberOfBalls; $i++) {
  $bola = rand(1, max: $maxNumber);

  if (!$canRepeat) {
    do {
      $hasDuplicate = false;
      foreach ($results as $result) {
        if ($bola == $result) {
          $hasDuplicate = true;
        }
      }
      if ($hasDuplicate) {
        $bola = rand(1, $maxNumber);
      }
    } while ($hasDuplicate);
  }

  array_push($results, $bola);
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lotto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
  <div class="container-fluid" style="background-color: black; color: cyan">
    <div class="row">
      <div class="col text-center p-5">
        <div class="h1"><?php echo implode("-", $results) ?></div>
        <div class="small">1 / <?php echo $probabilty?></div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>