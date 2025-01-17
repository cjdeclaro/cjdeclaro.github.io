<?php
header("Content-Type: application/json");
include("connect.php");

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
  case 'POST':
    handlePost($pdo, $input);
    break;
  case 'DELETE':
    handleDelete($pdo, $input);
    break;
  default:
    echo json_encode(['message' => 'Invalid request method']);
    break;
}

function handlePost($pdo, $inputs)
{
  $sql = "
  INSERT INTO userInfo (firstName, lastName) VALUES (:firstName, :lastName);
  SELECT MAX(userInfoID) AS lastInsertedID INTO @lastID FROM userinfo;
  INSERT INTO users (userName, password, email, phoneNumber, userInfoID) VALUES (:userName, :password, :email, :phoneNumber, @lastID);
  ";
  foreach($inputs as $input){
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      'userName' => $input['userName'],
      'password' => $input['password'],
      'email' => $input['email'],
      'phoneNumber' => $input['phoneNumber'],
      'firstName' => $input['firstName'],
      'lastName' => $input['lastName']
    ]);
  }

  echo json_encode(['message' => 'User created successfully']);
}

function handleDelete($pdo, $inputs)
{
  $sql = "
  DELETE FROM users WHERE userInfoID = :id;
  DELETE FROM userInfo WHERE userInfoID = :id;
  ";

  foreach($inputs as $input){
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $input]);
  }
  echo json_encode(['message' => 'User deleted successfully']);
}
?>