<?php
include("connect.php");

session_start();

$userID = $_SESSION['userID'];

if (isset($_POST['btnCreateGC'])) {
  $gcname = $_POST['gcname'];

  $gcmembersstr = $_POST['gcmembers'];
  $gcmembersstr = str_replace(" ", "", $gcmembersstr);
  $gcmembersarr = explode(",",$gcmembersstr);

  $createGCQuery = "INSERT INTO groupChats(adminID, gcName) VALUES ('$userID', '$gcname')";
  executeQuery($createGCQuery);

  $gcID = mysqli_insert_id($conn);

  foreach($gcmembersarr as $gcmemberid){
    $createGCQuery = "INSERT INTO gcmembers(userID, groupchatID) VALUES ('$gcmemberid', '$gcID')";
    executeQuery($createGCQuery);
  }

  header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Misinjir | New GC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-12 col-lg-7 mx-auto">

        <form method="POST">
          <div class="card p-5 shadow rounded-5">
            <div class="h3 my-4 text-center">
              New GC
            </div>
            <div class="mb-3">
              <label for="gcname" class="form-label">Group Chat Name</label>
              <input type="text" id="gcname" class="form-control" name="gcname" onchange="changeButtonName()" required>
            </div>
            <div class="mb-3">
              <label for="gcmembers" class="form-label">Group Chat Members</label>
              <input type="text" id="gcmembers" class="form-control" name="gcmembers" required>
            </div>
            <div class="mb-3 text-center">
              <button class="btn btn-primary py-3 px-5 rounded-5" name="btnCreateGC" id="btnCreateGC">Create GC</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include("shared/assets/brand.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    var btnCreateGC = document.getElementById("btnCreateGC");
    function changeButtonName() {
      btnCreateGC.innerHTML = "Create " + document.getElementById("gcname").value;
    }
  </script>
</body>

</html>