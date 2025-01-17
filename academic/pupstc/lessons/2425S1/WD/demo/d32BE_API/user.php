<?php
header("Content-Type: application/json");
include("connect.php");

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
  case 'GET':
    handleGet($pdo, $input);
    break;
  default:
    echo json_encode(['message' => 'Invalid request method']);
    break;
}

function handleGet($pdo, $input)
{
  $sql = "SELECT * FROM users WHERE userID = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(
    [
      'id' => $input['id']
    ]
  );
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
}

?>