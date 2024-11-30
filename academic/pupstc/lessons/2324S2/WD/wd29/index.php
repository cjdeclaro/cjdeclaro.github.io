<?php
include "shared/head.php";
?>

<?php
if (isset($_POST["title"])) {
  $title = $_POST["title"];
  $body = $_POST["body"];
  $category = $_POST["category"];
  $author = $_POST["author"];
  $date = $_POST["date"];

  $insertquery = "
    INSERT INTO Blogs(body, title, categories, author, date)
    VALUES
      ('$body', '$title', '$category', '$author', '$date')
  ";
  executeQuery($insertquery);
}

if (isset($_POST["delete"])) {
  $delete = $_POST["delete"];

  $deletequery = "DELETE FROM Blogs WHERE id=$delete";
  executeQuery($deletequery);
}
?>

<body>
  <?php
  $pagename = "index";
  include "shared/navigation.php";
  ?>
  <div class="container-fluid">
    <main class="tm-main">
      <!-- Search form -->
      <div class="row tm-row">
        <div class="col-12">
          <form method="GET" class="form-inline tm-mb-80 tm-search-form">
            <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..."
              aria-label="Search">
            <button class="tm-search-button" type="submit">
              <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>

      <div class="row tm-row">
        <form method="POST">
          <label for="title">Title</label>
          <input id="title" type="text" value="" name="title" required>
          <br>
          <label for="body">Body</label>
          <textarea value="" name="body" id="body" required></textarea>
          <br>
          <label for="category">Category</label>
          <input id="category" type="text" value="" name="category" required>
          <br>
          <label for="author">Author</label>
          <input id="author" type="text" value="" name="author" required>
          <br>
          <label for="date">Date</label>
          <input id="date" type="text" value="" name="date" required>
          <br>
          <button name="submit">Submit</button>
        </form>
      </div>

      <div class="row tm-row">

        <?php
        $query = "SELECT * FROM Blogs";
        $result = executeQuery($query);

        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <article class="col-12 col-md-6 tm-post">
            <hr class="tm-hr-primary">
            <a href="post.php" class="effect-lily tm-post-link tm-pt-60">
              <div class="tm-post-link-inner">
                <img src="img/<?php echo $row["image"] ?>" alt="Image" class="img-fluid">
              </div>
              <?php if ($row["is_new"] == 'true') { ?>
                <span class="position-absolute tm-new-badge">New</span>
              <?php } ?>
              <h2 class="tm-pt-30 tm-color-primary tm-post-title">
                <?php echo $row["title"] ?>
              </h2>
            </a>
            <p class="tm-pt-30">
              <?php echo $row["body"] ?>
            </p>
            <div class="d-flex justify-content-between tm-pt-45">
              <span class="tm-color-primary">
                <?php echo $row["categories"] ?>
              </span>
              <span class="tm-color-primary">
                <?php echo $row["date"] ?>
              </span>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <span>
                <?php echo $row["comments"] ?> comments
              </span>
              <span>by
                <?php echo $row["author"] ?>
              </span>
            </div>
            <form method="POST">
              <button name="delete" value="<?php echo $row['id'] ?>">Delete</button>
            </form>
          </article>
          <?php
        }
        ?>

      </div>
      <div class="row tm-row tm-mt-100 tm-mb-75">
        <div class="tm-prev-next-wrapper">
          <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
          <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
        </div>
        <div class="tm-paging-wrapper">
          <span class="d-inline-block mr-3">Page</span>
          <nav class="tm-paging-nav d-inline-block">
            <ul>
              <li class="tm-paging-item active">
                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
              </li>
              <li class="tm-paging-item">
                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
              </li>
              <li class="tm-paging-item">
                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
              </li>
              <li class="tm-paging-item">
                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
              </li>
            </ul>
          </nav>
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