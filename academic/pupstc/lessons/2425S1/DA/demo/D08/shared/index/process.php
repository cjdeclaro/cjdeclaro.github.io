<?php
include("connect.php");

session_start();

$userID = $_SESSION['userID'];

if ($userID == "") {
  header("Location: login.php");
}

if (isset($_GET['id'])) {
  $receiverID = $_GET['id'];
  $fullName = $_GET['fullName'];

  if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $sendMessageQuery = "INSERT INTO messages(senderID, receiverID, message, isRead, status) VALUES ('$userID', '$receiverID', '$message', 'yes', 'sent')";
    executeQuery($sendMessageQuery);
  }

  $messagesQuery = "SELECT * FROM `messages` WHERE (receiverID=$receiverID AND senderID=$userID) OR (receiverID=$userID AND senderID=$receiverID)";
  $messagesResult = executeQuery($messagesQuery);
}

$chatsQuery = "SELECT * FROM users JOIN userInfo ON users.userInfoId = userInfo.userInfoID WHERE NOT users.userID = $userID";
$chatsResult = executeQuery($chatsQuery);
?>