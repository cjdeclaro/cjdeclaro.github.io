<?php

include("connect.php");

if (isset($_GET['killswitch'])) {
  $killswitchvalue = $_GET['killswitch'];
  
  if($killswitchvalue == "PASSWORDITO"){
    $settingsQueryUpdate = "UPDATE settings SET settingValue = 'off' WHERE settingName = 'status'";
    executeQuery($settingsQueryUpdate);
  }
}

$theme = "light";

$settingsQuery = "SELECT * FROM settings WHERE settingName = 'theme'";
$settingsResult = executeQuery($settingsQuery);

while($settingsRow = mysqli_fetch_assoc($settingsResult)){
  $theme = $settingsRow['settingValue'];
}

$status = "on";

$settingsQuery = "SELECT * FROM settings WHERE settingName = 'status'";
$settingsResult = executeQuery($settingsQuery);

while($settingsRow = mysqli_fetch_assoc($settingsResult)){
  $status = $settingsRow['settingValue'];
}

if($status == "off"){
  header("Location: WebsiteUnavailable.php");
}

$page = "feed";

if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case "feed":
      $page = "feed";
      break;
    case "profile":
      $page = "profile";
      break;
    default:
      header("Location: ?page=feed");
      break;
  }
} else {
  header("Location: ?page=feed");
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MVC Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

  <style>
    .profilepic {
      width: 50px;
      height: 50px;
      border-radius: 100px;
      background-color: grey;
      float: left;
    }
  </style>
</head>

<body data-bs-theme="<?php echo $theme ?>">

  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">Navbar</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="container-fluid mt-3">
    <div class="row">

      <div class="col-1 col-sm-1 col-md-2 col-lg-3">
        <div class="card shadow rounded-5 p-3" style="height: 85vh">
          <h4 class="my-1">Example heading <span class="badge text-bg-secondary">New</span></h4>
          <a href="?page=feed" type="button" class="btn btn-primary position-relative my-1">
            Feed
          </a>
          <a href="?page=profile" type="button" class="btn btn-primary position-relative my-1">
            Profile
            <span
              class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
          </a>
          <button type="button" class="my-1 btn btn-primary">
            Notifications <span class="badge text-bg-secondary">4</span>
          </button>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-8 col-lg-6">
        <div class="card shadow rounded-5 p-4" style="height: 85vh; max-height: 85vh; overflow: scroll">

          <?php include("shared/" . $page . ".php"); ?>

        </div>
      </div>
      <div class="col-1 col-sm-1 col-md-2 col-lg-3">
        <div class="card shadow rounded-5" style="height: 85vh; max-height: 85vh; overflow: scroll">
          <div class="p-3 m-1" style="vertical-align: middle">
            <div class="profilepic m-1">
            </div>
            <div>
              John Doe
            </div>
          </div>
          <div class="p-3 m-1" style="vertical-align: middle">
            <div class="profilepic m-1">
            </div>
            <div>
              John Doe
            </div>
          </div>
          <div class="p-3 m-1" style="vertical-align: middle">
            <div class="profilepic m-1">
            </div>
            <div>
              John Doe
            </div>
          </div>
          <div class="p-3 m-1" style="vertical-align: middle">
            <div class="profilepic m-1">
            </div>
            <div>
              John Doe
            </div>
          </div>

          <div class="p-3 m-1" style="vertical-align: middle">
            <div class="profilepic m-1">
            </div>
            <div>
              John Doe
            </div>
          </div>

          <div class="p-3 m-1" style="vertical-align: middle">
            <div class="profilepic m-1">
            </div>
            <div>
              John Doe
            </div>
          </div>

          <div class="p-3 m-1" style="vertical-align: middle">
            <div class="profilepic m-1">
            </div>
            <div>
              John Doe
            </div>
          </div>

          <div class="p-3 m-1" style="vertical-align: middle">
            <div class="profilepic m-1">
            </div>
            <div>
              John Doe
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
</body>

</html>