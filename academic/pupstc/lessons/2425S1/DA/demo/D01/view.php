<?php
include('connect.php');

$id = $_GET['id'];

if(isset($_POST['btnEdit'])){
  $title = $_POST['title'];
  $body = $_POST['body'];
  $author = $_POST['author'];
  $categories = $_POST['categories'];
  $date = $_POST['date'];

  $editQuery = "UPDATE Blogs SET title='$title', body='$body', author='$author', categories='$categories', date='$date' WHERE id='$id'";
  executeQuery($editQuery);

  header('Location: ./');
}


$query = "SELECT * FROM Blogs WHERE id = '$id'";
$result = executeQuery($query);
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

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <div class="card shadow rounded-5 p-5">
          <div class="h3 text-center">
            Edit Post
          </div>

          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($blog = mysqli_fetch_assoc($result)) {
              ?>

              <form method="post">
                <input value="<?php echo $blog['title']?>" class="mt-3 form-control" type="text" name="title" placeholder="Title" required>
                <textarea class="mt-3 form-control" name="body" placeholder="Body" required><?php echo $blog['body']?></textarea>
                <input value="<?php echo $blog['author']?>" class="mt-3 form-control" type="text" name="author" placeholder="Author" required>
                <input value="<?php echo $blog['date']?>" class="mt-3 form-control" type="text" name="date" placeholder="Date">
                <input value="<?php echo $blog['categories']?>" class="mt-3 form-control" type="text" name="category" placeholder="Category">
                <button class="mt-5 btn btn-primary" type="submit" name="btnEdit">
                  Save
                </button>
              </form>

              <?php
            }
          }
          ?>

        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>