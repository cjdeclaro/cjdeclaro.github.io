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
  $sql = "SELECT * FROM tbl_Appliance";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
}

function handlePost($pdo, $input)
{
  $sql = "
  INSERT INTO tbl_Appliance(Item_code, Description, Category, Orig_Price, Sell_Price, Yrs_Wrnty) VALUES (:Item_code, :Description, :Category, :Orig_Price, :Sell_Price, :Yrs_Wrnty);
  ";

  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    'Item_code' => $input['Item_code'],
    'Description' => $input['Description'],
    'Category' => $input['Category'],
    'Orig_Price' => $input['Orig_Price'],
    'Sell_Price' => $input['Sell_Price'],
    'Yrs_Wrnty' => $input['Yrs_Wrnty']
  ]);

  echo json_encode(['message' => 'Appliance created successfully']);
}

function handlePut($pdo, $input)
{
  $sql = "UPDATE tbl_Appliance SET Category=:Category, Orig_Price=:Orig_Price,Sell_Price=:Sell_Price WHERE Item_code=:Item_code";

  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    'Category' => $input['Category'],
    'Orig_Price' => $input['Orig_Price'],
    'Sell_Price' => $input['Sell_Price'],
    'Item_code' => $input['Item_code']
  ]);
  echo json_encode(['message' => 'Appliance updated successfully']);
}

function handleDelete($pdo, $input)
{
  $sql = "DELETE FROM tbl_Appliance WHERE Item_code = :Item_code";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['Item_code' => $input['Item_code']]);
  echo json_encode(['message' => 'Appliance deleted successfully']);
}
?>