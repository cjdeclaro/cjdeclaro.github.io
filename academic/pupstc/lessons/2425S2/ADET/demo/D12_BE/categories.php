<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include("connect.php");

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
  case 'GET':
    handleGet($pdo);
    break;
  default:
    echo json_encode(['message' => 'Invalid request method']);
    break;
}

function handleGet($pdo)
{
  //TABLE CHECK
  $testQuery = "SELECT * FROM categories LIMIT 1";
  $queryResult = executeQuery($testQuery);

  if(!$queryResult){
    $createTable = "
      CREATE TABLE `categories` (
        `categoryID` int(4) NOT NULL,
        `name` varchar(30) NOT NULL
      );
    ";
    $assignKey = "
      ALTER TABLE `categories` ADD PRIMARY KEY (`categoryID`);
    ";
    $assignAttributes = "
      ALTER TABLE `categories` MODIFY `categoryID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
    ";
    $addDefaultData = "
      INSERT INTO `categories` (`categoryID`, `name`) VALUES
      (1, 'Burgers'),
      (2, 'Pasta'),
      (3, 'Meal');
    ";

    executeQuery($createTable);
    executeQuery($assignKey);
    executeQuery($assignAttributes);
    executeQuery($addDefaultData);
  }

  $sql = "SELECT * FROM categories";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
}
?>