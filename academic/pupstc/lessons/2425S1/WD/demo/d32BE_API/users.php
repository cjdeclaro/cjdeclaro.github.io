<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
include("connect.php");

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
  case 'GET':
    handleGet($pdo);
    break;
  case 'POST':
    handlePost($pdo, $input);
    break;
  case 'PUT':
    handlePut($pdo, $input);
    break;
  case 'DELETE':
    handleDelete($pdo, $input);
    break;
  default:
    echo json_encode(['message' => 'Invalid request method']);
    break;
}

function handleGet($pdo)
{
  $sql = "SELECT * FROM users LEFT JOIN userInfo ON users.userInfoID = userInfo.userInfoID";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
}

function handlePost($pdo, $input)
{
  $sql = "
  INSERT INTO userInfo (firstName, lastName) VALUES (:firstName, :lastName);
  SELECT MAX(userInfoID) AS lastInsertedID INTO @lastID FROM userinfo;
  INSERT INTO users (userName, password, email, phoneNumber, userInfoID) VALUES (:userName, :password, :email, :phoneNumber, @lastID);
  ";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    'userName' => $input['userName'],
    'password' => $input['password'],
    'email' => $input['email'],
    'phoneNumber' => $input['phoneNumber'],
    'firstName' => $input['firstName'],
    'lastName' => $input['lastName']
  ]);

  echo json_encode(['message' => 'User created successfully']);
}

function handlePut($pdo, $input)
{
  $sql = "UPDATE users SET
  userName = :userName,
  password = :password,
  email = :email,
  phoneNumber = :phoneNumber,
  userInfoID = :userInfoID
  WHERE userID = :id";

  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    'userName' => $input['userName'],
    'password' => $input['password'],
    'email' => $input['email'],
    'phoneNumber' => $input['phoneNumber'],
    'userInfoID' => '1',
    'id' => $input['id']
  ]);
  echo json_encode(['message' => 'User updated successfully']);
}

function handleDelete($pdo, $input)
{
  $sql = "DELETE FROM users WHERE userID = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $input['id']]);
  echo json_encode(['message' => 'User deleted successfully']);
}
?>