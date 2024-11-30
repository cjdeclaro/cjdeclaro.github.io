<?php
$dbhost = "localhost";
$dbuser = "id20296563_test";
$dbpass = "U7_d*]=i94N+Zrjo";
$db = "id20296563_demo";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

if (!$conn) {
  die("Connection Failed. " . mysqli_connect_error());
}

function executeQuery($query)
{
  $conn = $GLOBALS['conn'];
  return mysqli_query($conn, $query);
}
?>
