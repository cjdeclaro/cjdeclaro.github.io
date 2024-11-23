<?php
include('connect.php');

// CHECK IF THE BUTTON WAS CLICKED
if(isset($_POST['btnSubmitBlog'])){
  $title = $_POST['title'];
  $category = $_POST['category'];
  $author = $_POST['author'];
  $date = $_POST['date'];
  $body = $_POST['body'];

  $blogQuery = "INSERT INTO Blogs(title, categories, author, date, body) VALUES ('$title', '$category', '$author', '$date', '$body')";
  executeQuery($blogQuery);
}

if(isset($_POST['btnDelete'])){
  $idako = $_POST['idako'];
  $deleteQuery = "DELETE FROM Blogs WHERE id = '$idako'";
  executeQuery($deleteQuery);
}

$query = "SELECT * FROM Blogs";
$result = executeQuery($query);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ComSoc | Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="shared/css/style.css">
</head>

<body>
  <?php include('shared/assets/banner.php') ?>
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <div class="display-3">
          Home
        </div>
      </div>
    </div>
    <div class="row">

      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($blog = mysqli_fetch_assoc($result)) {
          ?>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card my-3">
              <img class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title"><?php echo $blog['title']?></h5>
                <h6 class="card-subtitle text-body-secondary"><?php echo $blog['author']?></h6>
                <p class="card-text"><?php echo $blog['body']?></p>
                <form method="post">
                  <input type="hidden" value="<?php echo $blog['id']?>" name="idako">
                  <button class="btn btn-danger" name="btnDelete">Delete</button>
                </form>
                <a href="view.php?id=<?php echo $blog['id']?>">
                  <button class="btn btn-primary">Edit</button>
                </a>
              </div>
            </div>
          </div>

          <?php
        }
      }
      ?>

    </div>

    <form method="post">
      <input type="text" name="title" placeholder="Title" required>
      <input type="text" name="body" placeholder="Body" required>
      <input type="text" name="author" placeholder="Author" required>
      <input type="text" name="date" placeholder="Date">
      <input type="text" name="category" placeholder="Category">
      <button type="submit" name="btnSubmitBlog">
        Send
      </button>
    </form>
  </div>
  <?php include('shared/assets/footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>