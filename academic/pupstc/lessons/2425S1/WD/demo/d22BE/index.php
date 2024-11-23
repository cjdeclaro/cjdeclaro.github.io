<?php
date_default_timezone_set('Asia/Manila');

$currentHour = date("H");
$colorMode = ( $currentHour <= 13 && $currentHour >= 6) ? "light" : "dark";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="<?php echo $colorMode?>">
  <div class="display-1 text-center fw-bold">
    <?php
      echo date("h:i A");
    ?>
  </div>
  <div class="display-6 text-center fw-bold">
    <?php
      echo date("jS \d\a\y \of F");
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>