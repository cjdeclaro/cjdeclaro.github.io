<?php
include("connect.php");

$currentYear = date("Y");

$enrollmentYearFilter = $_GET['enrollmentYear'];
$sectionFilter = $_GET['section'];
$sort = $_GET['sort'];
$order = $_GET['order'];

$studentsQuery = "SELECT * FROM students";

if ($enrollmentYearFilter != '' || $sectionFilter != '') {
  $studentsQuery = $studentsQuery . " WHERE";

  if ($enrollmentYearFilter != '') {
    $studentsQuery = $studentsQuery . " enrollmentYear='$enrollmentYearFilter'";
  }

  if($enrollmentYearFilter != '' && $sectionFilter != ''){
    $studentsQuery = $studentsQuery . " AND";
  }
  
  if ($sectionFilter != '') {
    $studentsQuery = $studentsQuery . " section='$sectionFilter'";
  }
}

if ($sort != ''){
  $studentsQuery = $studentsQuery." ORDER BY $sort";

  if($order != ''){
    $studentsQuery = $studentsQuery." $order";
  }
}

$studentResults = executeQuery($studentsQuery);

$enrollmentYearQuery = "SELECT DISTINCT(enrollmentYear) FROM students";
$enrollmentYearResults = executeQuery($enrollmentYearQuery);

$sectionQuery = "SELECT DISTINCT(section) FROM students";
$sectionResults = executeQuery($sectionQuery);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row my-5">
      <div class="col">
        <form>
          <div class="card p-4 rounded-5">
            <div class="h6">
              Filter
            </div>
            <div class="d-flex flex-row align-items-center">
              <label for="enrollmentSelect">Enrollment Year</label>
              <select id="enrollmentSelect" name="enrollmentYear" class="ms-2 form-control" style="width: fit-content">
                <option value="">Any</option>
                <?php
                if (mysqli_num_rows($enrollmentYearResults) > 0) {
                  while ($enrollmentYearRow = mysqli_fetch_assoc($enrollmentYearResults)) {
                    ?>

                    <option <?php if($enrollmentYearFilter == $enrollmentYearRow['enrollmentYear']) {echo "selected";}?> value="<?php echo $enrollmentYearRow['enrollmentYear'] ?>">
                      <?php echo $enrollmentYearRow['enrollmentYear'] ?>
                    </option>

                    <?php
                  }
                }
                ?>
              </select>

              <label for="sectionSelect" class="ms-2">Section</label>
              <select id="sectionSelect" name="section" class="ms-2 form-control" style="width: fit-content">
                <option value="">Any</option>
                <?php
                if (mysqli_num_rows($sectionResults) > 0) {
                  while ($sectionRow = mysqli_fetch_assoc($sectionResults)) {
                    ?>

                    <option <?php if($sectionFilter == $sectionRow['section']) {echo "selected";}?> value="<?php echo $sectionRow['section'] ?>">
                      <?php echo $sectionRow['section'] ?>
                    </option>

                    <?php
                  }
                }
                ?>
              </select>

              <label for="sort" class="ms-2">Sort By</label>
              <select id="sort" name="sort" class="ms-2 form-control" style="width: fit-content">
                <option value="">None</option>
                <option <?php if($sort == "firstName") {echo "selected";}?> value="firstName">First Name</option>
                <option <?php if($sort == "lastName") {echo "selected";}?> value="lastName">Last Name</option>
                <option <?php if($sort == "studentID") {echo "selected";}?> value="studentID">Student ID</option>
              </select>

              <label for="order" class="ms-2">Order</label>
              <select id="order" name="order" class="ms-2 form-control" style="width: fit-content">
                <option <?php if($order == "ASC") {echo "selected";}?> value="ASC">Ascending</option>
                <option <?php if($order == "DESC") {echo "selected";}?> value="DESC">Descending</option>
              </select>
            </div>

            <div class="text-center">
              <button class="btn btn-primary ms-2 mt-4" style="width: fit-content">Submit</button>
            </div>

          </div>
        </form>
      </div>
    </div>
    <div class="row my-5">
      <div class="col">
        <div class="card p-4 rounded-5">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Student ID</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Enrollment</th>
                <th scope="col">Section</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (mysqli_num_rows($studentResults) > 0) {
                while ($studentRow = mysqli_fetch_assoc($studentResults)) {
                  $currentYearLevel = $currentYear - $studentRow['enrollmentYear'] + 1;
                  $section = $studentRow['section'];
                  $displaySection = $currentYearLevel > 4 ? "Graduated" : $currentYearLevel . "-" . $section;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $studentRow['studentID'] ?></th>
                    <td><?php echo $studentRow['firstName'] ?></td>
                    <td><?php echo $studentRow['lastName'] ?></td>
                    <td><?php echo $studentRow['enrollmentYear'] ?></td>
                    <td><?php echo $displaySection ?></td>
                    <td></td>
                  </tr>
                  <?php
                }
              }
              ?>
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