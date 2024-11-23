<?php
include("connect.php");

$query = "SELECT * FROM students";

if(isset($_GET['searchTerm'])){
  $searchTerm = $_GET['searchTerm'];
  $query = $query . " WHERE firstName LIKE '%$searchTerm%' OR lastName LIKE '%$searchTerm%' OR studentID LIKE '%$searchTerm%' OR email LIKE '%$searchTerm%'";
}

if(isset($_GET['order'])){
  $order = $_GET['order'];
  $query = $query." ORDER BY $order";
}

$result = executeQuery($query);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="row py-5">
      <div class="col">
        <form class="text-center">
          <div class="mb-3">
            <input type="text" class="p-3 shadow-sm rounded-5 form-control" placeholder="Search" name="searchTerm"
              value="<?php echo $searchTerm ?>">
          </div>
          <div class="d-flex flex-row justify-content-center">
            <button type="submit" class="rounded-5 p-3 btn btn-primary">Search</button>
            <a href="index.php">
              <button type="button" class="rounded-5 p-3 btn btn-secondary">Clear</button>
            </a>
            <select name="order" class="form-select" style="width: fit-content" aria-label="Default select example">
              <option selected value="lastName">Last Name</option>
              <option value="firstName">First Name</option>
              <option value="studentID">Student ID</option>
            </select>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
              </tr>
            </thead>
            <tbody>

              <?php while ($student = mysqli_fetch_assoc($result)) { ?>

                <tr>
                  <th scope="row"><?php echo $student['studentID'] ?></th>
                  <td><?php echo $student['firstName'] ?></td>
                  <td><?php echo $student['lastName'] ?></td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>