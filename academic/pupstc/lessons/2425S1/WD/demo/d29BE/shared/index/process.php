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

  $messagesQuery = "SELECT * FROM `messages` WHERE ((receiverID=$receiverID AND senderID=$userID) OR (receiverID=$userID AND senderID=$receiverID)) AND groupChatID IS NULL";
  $messagesResult = executeQuery($messagesQuery);
}

if (isset($_GET['gcid'])) {
  $gcID = $_GET['gcid'];
  $fullName = $_GET['fullName'];

  if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $sendMessageQuery = "INSERT INTO messages(senderID, message, isRead, status, groupChatID) VALUES ('$userID', '$message', 'yes', 'sent', '$gcID')";
    executeQuery($sendMessageQuery);
  }

  $membersQuery = "SELECT * FROM gcmembers JOIN users ON gcmembers.userID = users.userID JOIN userInfo ON users.userInfoID = userInfo.userInfoID WHERE groupChatID='$gcID'";
  $membersResult = executeQuery($membersQuery);

  $messagesQuery = "SELECT * FROM `messages` WHERE groupChatID='$gcID'";
  $messagesResult = executeQuery($messagesQuery);
}

$chatsQuery = "SELECT * FROM users JOIN userInfo ON users.userInfoId = userInfo.userInfoID WHERE NOT users.userID = $userID";
$chatsResult = executeQuery($chatsQuery);

$groupChatsQuery = "SELECT * FROM groupchats JOIN gcmembers ON groupchats.groupChatID = gcmembers.groupChatID WHERE gcmembers.userID = '$userID'";
$groupChatsResult = executeQuery($groupChatsQuery);
?>