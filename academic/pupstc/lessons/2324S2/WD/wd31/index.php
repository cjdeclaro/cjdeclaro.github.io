<?php
session_start();

if(!isset($_SESSION["loggedin"])){
  header("Location: login.php");
}

?>

<html>

<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <script>
    new WOW().init();
  </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style>
    .panel {
      width: 600px;
      height: 300px;
      border: 1px solid black;
    }

    .box {
      height: 300px;
    }
  </style>
</head>

<body>
  <div>
    <a href="login.php"><button>Logout</button></a>

    <div class="panel">
      <canvas id="myChart"></canvas>
    </div>

    <div class="panel">
      <canvas id="doughnut"></canvas>
    </div>
  </div>

  <div class="box">
    <h1 class="wow animate__animated animate__bounce">Hello World</h1>
  </div>

  <div class="box">
    <h1 class="wow animate__animated animate__shakeX">Hello World</h1>
  </div>

  <div class="box">
    <h1 class="wow animate__animated animate__rubberBand">Hello World</h1>
  </div>

  <div class="box">
    <h1 class="wow animate__animated animate__rubberBand">Hello World</h1>
  </div>

  <div class="box">
    <h1 class="wow animate__animated animate__rubberBand">Hello World</h1>
  </div>

  <script>
    const ctx = document.getElementById('myChart');
    const dnt = document.getElementById('doughnut');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'New', 'Red', 'Blue', 'Yellow', 'Green',
          'Purple', 'Orange', 'New'
        ],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3, 5, 12, 19, 3, 5, 2, 3, 5],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    new Chart(dnt, {
      type: 'doughnut',
      data: {
        labels: [
          'Red',
          'Blue',
          'Yellow'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [300, 50, 100],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
          ],
          hoverOffset: 4
        }]
      },
      options: {}
    });
  </script>
</body>

</html>