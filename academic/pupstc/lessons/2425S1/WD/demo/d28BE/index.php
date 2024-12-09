<?php
include 'connect.php';

date_default_timezone_set('Asia/Manila');

if (isset($_POST['submit'])) {
	$htmlfileupload = $_FILES['htmlFile']['name'];
	$htmlfileuploadTMP = $_FILES['htmlFile']['tmp_name'];

	//RENAME THE FILE
	$htmlfileExt = substr($htmlfileupload, strripos($htmlfileupload, '.'));
	$htmlnewname = date("YMdHisu");

	$htmlnewfilename = $htmlnewname . $htmlfileExt;

	//SET THE LOCATION
	$htmlfolder = "uploads/";

	move_uploaded_file($htmlfileuploadTMP, $htmlfolder . $htmlnewfilename);

	$headline = $_POST['headline'];

	$insertArticle = "INSERT INTO tcsarticles(headline, banner, description, categoryID, photoDescription, photoSource, content) VALUES ('$headline', '$htmlnewfilename', 'Lorem Ipsum', 1, 'A TEST', 'John Doe', 'Lorem Ipsum')";
	executeQuery($insertArticle);
}

$articlesQuery = "SELECT * FROM tcsarticles";
$articlesResult = executeQuery($articlesQuery);

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
		<div class="row my-5">
			<div class="col">
				<div class="card p-5 rounded-5 my-5">
					<form method="POST" enctype="multipart/form-data">
						<div class="h3">
							File Upload
						</div>
						<div class="mb-3">
							<input type="text" name="headline" class="form-control" placeholder="headline" required />
						</div>
						<div class="mb-3">
							<input type="file" name="htmlFile" class="form-control" accept=".png, .jpg" required />
						</div>
						<div class="mb-3">
							<button class="btn btn-primary" name="submit">
								Submit
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">

		<?php while($articlesRow = mysqli_fetch_assoc($articlesResult )){?>

			<div class="col-6">
				<div class="card py-3 my-3">
					<div class="h4">
						<?php echo $articlesRow['headline'] ?>
					</div>
					<div style="width: 100%">
						<img style="width: 100%" src="uploads/<?php echo $articlesRow['banner'] ?>">	
					</div>
				</div>
			</div>

		<?php } ?>

		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
</body>

</html>