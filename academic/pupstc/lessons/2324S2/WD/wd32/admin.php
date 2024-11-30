<?php
include "connect.php";

if(isset($_POST['upload'])){
  $productname = $_POST['productname'];

  $foldername = 'products/';

  $filename = $_FILES['productimage']['name'];
  $fileuploadTMP = $_FILES['productimage']['tmp_name']; // Temporary storage in RAM

  $file_ext = substr($filename, strripos($filename, '.')); // .png, .jpg
  $filenewname = date("YmdHisu");

  $newfilename = $filenewname.$file_ext; // 20230213173612091243.png

  move_uploaded_file($fileuploadTMP, $foldername.$newfilename); // move file from RAM to the folder

  $query = "INSERT INTO products(name, filename) VALUES('$productname', '$newfilename')";
  executeQuery($query);
}
?>

<html>
  <head>

  </head>
  <body>
    <form method="post" enctype="multipart/form-data">
      <label for="pname">Product Name</label>
      <input id="pname" name="productname" type="text" required>
      <br>
      <input type="file" accept="image/*" name="productimage">
      <button name="upload">Upload</button>
    </form>
  </body>
</html>