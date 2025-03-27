<?php

include("connect.php");

$userId = 1;
$hasRolled = false;

$colors = [
  "red",
  "blue",
  "green",
  "pink",
  "yellow",
  "white"
];

$colorNumber1 = rand(0, max: 5);
$colorNumber2 = rand(0, max: 5);
$colorNumber3 = rand(0, max: 5);

$numberOfWins = 0;

$totalWinning = 0;

$totalWinningQuery = "SELECT SUM(amount) FROM transactions WHERE userId = '$userId'";
$totalWinningResult = executeQuery($totalWinningQuery);

while($totalWinningRow = mysqli_fetch_assoc($totalWinningResult)){
  $totalWinning = $totalWinningRow['SUM(amount)'];
}

$userLuck = 1;

$userLuckQuery = "SELECT * FROM users WHERE userId = '$userId'";
$userLuckResult = executeQuery($userLuckQuery);

while($userLuckRow = mysqli_fetch_assoc($userLuckResult)){
  $userLuck = $userLuckRow['luck'];
}

// Manipulation Matrix

$userThreshold = 50000;
$autoWin = false;
$autoLoose = false;

if($userLuck == 2){
  if($totalWinning > $userThreshold){
    $updateLuck = "UPDATE users SET luck = '0' WHERE userId = '$userId'";
    executeQuery($updateLuck);
  }

  $randNum = rand(1,4);
  if($randNum != 1){
    $autoWin = true;
  }
}

if($userLuck == 0){
  if($totalWinning < ($userThreshold * (-1))){
    $updateLuck = "UPDATE users SET luck = '2' WHERE userId = '$userId'";
    executeQuery($updateLuck);
  }

  $randNum = rand(1,4);
  if($randNum != 1){
    $autoLoose = true;
  }
}

if (isset($_POST['rollBtn'])) {
  $hasRolled = true;

  $colorChoice = $_POST['colorChoice'];
  $amount = $_POST['amount'];

  //Manipulate winning
  if($autoWin){
    $colorNumber1 = $colorChoice;
  }

  if($autoLoose){
    if($colorChoice == $colorNumber1){
      $colorNumber1 += 1;
      $colorNumber1 = $colorNumber1 == 6 ? 0 : $colorNumber1;
    }
    if($colorChoice == $colorNumber2){
      $colorNumber2 += 1;
      $colorNumber2 = $colorNumber2 == 6 ? 0 : $colorNumber2;
    }
    if($colorChoice == $colorNumber3){
      $colorNumber3 += 1;
      $colorNumber3 = $colorNumber3 == 6 ? 0 : $colorNumber3;
    }
  }

  if($colorChoice == $colorNumber1){
    $numberOfWins += 1;
  }
  if($colorChoice == $colorNumber2){
    $numberOfWins += 1;
  }
  if($colorChoice == $colorNumber3){
    $numberOfWins += 1;
  }

  $winAmount = 0;
  $kind = '';

  if($numberOfWins>0){
    $winAmount = ($amount * $numberOfWins) + $amount;
    $kind = 'win';
  } else {
    $winAmount = ($amount) * (-1);
    $kind = 'loss';
  }

  $transactionQuery = "
    INSERT INTO transactions(userId, kind, amount)
    VALUES ('$userId', '$kind', '$winAmount')
  ";
  executeQuery($transactionQuery);
}

$totalWinningQuery = "SELECT SUM(amount) FROM transactions WHERE userId = '$userId'";
$totalWinningResult = executeQuery($totalWinningQuery);

while($totalWinningRow = mysqli_fetch_assoc($totalWinningResult)){
  $totalWinning = $totalWinningRow['SUM(amount)'];
}

$totalHouseWinning = 0;

$totalHouseWinningQuery = "SELECT SUM(amount) FROM transactions";
$totalHouseWinningResult = executeQuery($totalHouseWinningQuery);

while($totalHouseWinningRow = mysqli_fetch_assoc($totalHouseWinningResult)){
  $totalHouseWinning = $totalHouseWinningRow['SUM(amount)'];
  $totalHouseWinning = $totalHouseWinning * (-1);
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

  <style>
    .box {
      width: 150px;
      height: 150px;
      margin-left: auto;
      margin-right: auto;
    }

    .red {
      background-color: red;
    }

    .green {
      background-color: green;
    }

    .yellow {
      background-color: yellow;
    }

    .blue {
      background-color: blue;
    }

    .white {
      background-color: white;
    }

    .pink {
      background-color: pink;
    }
  </style>
</head>

<body data-bs-theme="dark">
  <?php if ($hasRolled) { ?>
    <div class="container">
      <div class="row my-5">
        <div class="col-4 my-1 text-center">
          <div class="box <?php echo $colors[$colorNumber1] ?>"></div>
          <div class="small"><?php echo $colors[$colorNumber1] ?></div>
        </div>
        <div class="col-4 my-1 text-center">
          <div class="box <?php echo $colors[$colorNumber2] ?>"></div>
          <div class="small"><?php echo $colors[$colorNumber2] ?></div>
        </div>
        <div class="col-4 my-1 text-center">
          <div class="box <?php echo $colors[$colorNumber3] ?>"></div>
          <div class="small"><?php echo $colors[$colorNumber3] ?></div>
        </div>
      </div>
    </div>
  <?php } ?>

  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <div class="card shadow py-3 px-5 rounded-5 mx-auto" style="max-width: 500px;">
          <div class="h4">Bet: <?php echo $amount ?></div>
          <div class="h4">Win: <?php echo $winAmount ?></div>

          <div class="h4 mt-3">Total Winning: <?php echo $totalWinning ?></div>
          <div class="h4">Total House Winning: <?php echo $totalHouseWinning ?></div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <form method="post">
          <div class="card shadow p-5 rounded-5 mx-auto" style="max-width: 500px;">

            <select name="colorChoice" class="form-select form-select-sm" aria-label="Small select example">
              <option selected>Colors</option>
              <option value="0">Red</option>
              <option value="1">Blue</option>
              <option value="2">Green</option>
              <option value="3">Pink</option>
              <option value="4">Yellow</option>
              <option value="5">White</option>
            </select>

            <input type="number" name="amount" placeholder="Bet amount" class="form-control mt-3">
            <input type="submit" name="rollBtn" class="p-3 rounded-5 btn btn-primary mt-3 mx-auto" value="Roll"
              style="width: fit-content">
          </div>
        </form>
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