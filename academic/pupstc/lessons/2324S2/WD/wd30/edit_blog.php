<?php
include "shared/head.php";

// Redirect to index if $_GET['id'] is not present in the URL
if(!isset($_GET['id'])){
  header("Location: index.php");
}

$id = $_GET['id'];
$query = "SELECT * FROM Blogs WHERE id = $id";
$result = executeQuery($query);

// Declare variables
$title = "";
$author = "";
$body = "";
$date = "";
$category = "";

// Loop through data to get column values
while ($row = mysqli_fetch_assoc($result)) {
  $title = $row['title'];
  $author = $row['author'];
  $body = $row['body'];
  $date = $row['date'];
  $category = $row['categories'];
}

// This updates the db
if (isset($_POST["title"])) {
  $title = $_POST["title"];
  $body = $_POST["body"];
  $category = $_POST["category"];
  $author = $_POST["author"];
  $date = $_POST["date"];

  $updatequery = "
    UPDATE Blogs SET
    author = '$author',
    title = '$title',
    body = '$body',
    categories = '$category',
    date = '$date'
    WHERE id = $id
  ";
  executeQuery($updatequery);
  header("Location: index.php?message=update_success");
}
?>

<body>
  <?php
  $pagename = "";
  include "shared/navigation.php";
  ?>
  <div class="container-fluid">
    <main class="tm-main">
      <div class="row tm-row tm-mb-120">
        <div class="col-12">
          <h2 class="tm-color-primary tm-post-title tm-mb-60">Contact Us
            <?php echo $_GET['test'] . " " . $_GET['new'] ?>
          </h2>
        </div>
        <div class="col-lg-7 tm-contact-left">
          <form method="POST" class="mb-5 ml-auto mr-0 tm-contact-form">
            <div class="form-group row mb-4">
              <label for="title" class="col-sm-3 col-form-label text-right tm-color-primary">Title</label>
              <div class="col-sm-9">
                <input class="form-control mr-0 ml-auto" value="<?php echo $title ?>" name="title" id="title" type="text" required>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="body" class="col-sm-3 col-form-label text-right tm-color-primary">Body</label>
              <div class="col-sm-9">
                <textarea class="form-control mr-0 ml-auto" name="body" id="body" type="text" required><?php echo $body ?></textarea>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="author" class="col-sm-3 col-form-label text-right tm-color-primary">Author</label>
              <div class="col-sm-9">
                <input class="form-control mr-0 ml-auto" value="<?php echo $author ?>" name="author" id="author" type="text" required>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="category" class="col-sm-3 col-form-label text-right tm-color-primary">Category</label>
              <div class="col-sm-9">
                <input class="form-control mr-0 ml-auto" value="<?php echo $category ?>" name="category" id="category" type="text" required>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="date" class="col-sm-3 col-form-label text-right tm-color-primary">Date</label>
              <div class="col-sm-9">
                <input class="form-control mr-0 ml-auto" value="<?php echo $date ?>" name="date" id="date" type="text" required>
              </div>
            </div>
            <div class="form-group row text-right">
              <div class="col-12">
                <button class="tm-btn tm-btn-primary tm-btn-small">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php
      include "shared/footer.php";
      ?>
    </main>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/templatemo-script.js"></script>
</body>

</html>