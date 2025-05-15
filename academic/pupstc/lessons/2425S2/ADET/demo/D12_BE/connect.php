<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "POS";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

try {
	$pdo = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die("Connection failed: " . $e->getMessage());
}

if (!$conn) {
	die("Connection Failed. " . mysqli_connect_error());
	echo "can't connect to database";
}

function executeQuery($query)
{
	$conn = $GLOBALS['conn'];
	return mysqli_query($conn, $query);
}
?>