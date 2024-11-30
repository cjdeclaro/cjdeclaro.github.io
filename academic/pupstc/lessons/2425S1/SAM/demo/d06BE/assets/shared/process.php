<?php
session_start();

include("connect.php");

$currentUser = $_SESSION['currentUser'];

if(!isset($currentUser)){
  header("Location: login.php");
}

$chatsQuery = "SELECT * FROM users JOIN userinfo ON users.userInfoID = userinfo.userInfoID WHERE NOT users.userID = '$currentUser'";
$chatsResult = executeQuery($chatsQuery);

$receiverID = $_GET['id'];
$receiverFname = $_GET['fname'];
$receiverLname = $_GET['lname'];

if (isset($_POST['btnSend']) && isset($receiverID)) {
  $message = $_POST['message'];

  $messageQuery = "INSERT INTO messages(senderID, receiverID, message, isRead, status) VALUES ('$currentUser','$receiverID','$message','yes','sent')";
  executeQuery($messageQuery);
}

if (isset($receiverID)) {
  $convoQuery = "SELECT * FROM messages WHERE (receiverID = '$currentUser' AND senderID='$receiverID') OR (receiverID='$receiverID' AND senderID='$currentUser')";
  $convoResult = executeQuery($convoQuery);
}
?>