<?php include("shared/index/process.php") ?>

<!doctype html>
<html lang="en">

<?php include("shared/index/head.php") ?>

<body data-bs-theme="light">
  <div class="container-fluid">
    <div class="row mainRow p-3">
      <?php include("shared/index/chats.php") ?>
      <?php include("shared/index/messages.php") ?>
      <?php include("shared/index/options.php") ?>
    </div>
  </div>
  <?php include("shared/assets/brand.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
