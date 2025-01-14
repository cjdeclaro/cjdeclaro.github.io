<?php
include("connect.php");

$likesCount = 500000;
$likesCount = $likesCount >= 1000 ? ($likesCount / 1000) . "k" : $likesCount;

$userCountQuery = "SELECT COUNT(userID) AS userCount FROM users";
$userCountResult = executeQuery($userCountQuery);
$userCount = 0;
while ($userCountRow = mysqli_fetch_assoc($userCountResult)) {
  $userCount = $userCountRow['userCount'];
}

$pagesQuery = "SELECT page, COUNT(visitID) AS visitCount FROM visits GROUP BY page";
$pagesResult = executeQuery($pagesQuery);

$chartLabels = array();
$chartData = array();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="Chart.js"></script>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">Navbar</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-2" style="background-color: grey">
        <div class="row px-3 py-2" style="color: white">
          Test
        </div>
        <div class="row px-3 py-2" style="color: white">
          Test
        </div>
        <div class="row px-3 py-2" style="color: white">
          Test
        </div>
      </div>
      <div class="col-10">
        <div class="container">
          <div class="row text-center my-5">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
              <div class="card p-3 rounded shadow">
                <div class="h6">
                  Users
                </div>
                <div class="h3">
                  <?php echo $userCount ?>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
              <div class="card p-3 rounded shadow">
                <div class="h6">
                  Likes
                </div>
                <div class="h3">
                  <?php echo $likesCount ?>
                </div>
              </div>
            </div>

            <?php while ($pagesRow = mysqli_fetch_assoc($pagesResult)) { ?>

              <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
                <div class="card p-3 rounded shadow">
                  <div class="h6">
                    Visits (<?php echo $pagesRow['page'] ?>)
                  </div>
                  <div class="h3">
                    <?php echo $pagesRow['visitCount'] ?>
                  </div>
                </div>
              </div>

              <?php
              array_push($chartLabels, $pagesRow['page']);
              array_push($chartData, $pagesRow['visitCount']);
            }
            ?>
          </div>
          <div class="row">
            <div class="col">
              <div class="card">
                <canvas id="bar"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var barChartData = {
      labels: [<?php echo '"' . implode('","', $chartLabels) . '"' ?>],
      datasets: [
        {
          fillColor: "rgba(220,220,220,0.5)",
          strokeColor: "rgba(220,220,220,1)",
          data: [<?php echo implode(',', $chartData) ?>]
        }
      ]
    };
    new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>