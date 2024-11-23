<?php
include("connect.php");

$currentUser = 2;

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

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .mainContainer {
      height: 100vh;
    }

    .mainContent {
      height: 100%;
    }

    .messageContainer {
      position: relative;
    }

    .messageBox {
      position: absolute;
      bottom: 0;
      background-color: white;
    }

    .messageBox input {
      border-radius: 100px 0px 0px 100px;
    }

    .messageBox button {
      border-radius: 0px 100px 100px 0px;
    }

    .convoContainer {
      height: 430px;
      overflow: auto;
    }

    .chatBubble {
      border-radius: 20px;
      padding: 10px 20px;
      width: fit-content;
      max-width: 80%;
      margin: 10px;
    }

    .receiver {
      background-color: lightgrey;

    }

    .sender {
      background-color: lightblue;
      margin-left: auto;
    }

    .statusInfo-sender{
      font-size: 7px;
      margin-left: auto;
      margin-right: 10px;
      width:fit-content;
    }

    .statusInfo-receiver{
      font-size: 7px;
      margin-left: 10px;
      width:fit-content;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row mainContainer p-3">
      <div class="col-6 col-md-3">
        <div class="card rounded-5 mainContent overflow-hidden">
          <div class="shadow p-3 h5">
            Chats
          </div>

          <?php
          if (mysqli_num_rows($chatsResult) > 0) {
            while ($user = mysqli_fetch_assoc($chatsResult)) {
              ?>
              <a
                href="index.php?id=<?php echo $user['userID'] ?>&fname=<?php echo $user['firstName'] ?>&lname=<?php echo $user['lastName'] ?>">
                <div class="p-3 shadow-sm">
                  <?php echo $user['firstName'] . " " . $user['lastName'] ?>
                </div>
              </a>

              <?php
            }
          }
          ?>

        </div>
      </div>
      <div class="col-6 col-md-9">
        <div class="card rounded-5 mainContent overflow-hidden messageContainer">
          <div class="shadow p-3 h5">
            <?php echo $receiverFname . " " . $receiverLname ?>
          </div>
          <div class="convoContainer">
            <div>
              <?php
              if (isset($receiverID)) {
                if (mysqli_num_rows($convoResult) > 0) {
                  while ($convo = mysqli_fetch_assoc($convoResult)) {
                    $className = $convo['senderID'] == $currentUser ? 'sender' : 'receiver';
                    ?>
                    <div class="chatBubble <?php echo $className?>">
                      <?php echo $convo['message']?>
                    </div>
                    <div class="statusInfo-<?php echo $className?>"><?php echo $convo['dateTime'].".".$convo['status']?></div>
                    <?php
                  }
                }
              }
              ?>
            </div>
          </div>
          <form method="post">
            <div class="messageBox p-3 w-100 d-flex flex-row shadow-lg">
              <input type="text" class="form-control p-3" name="message">
              <button type="submit" class="btn btn-primary p-3" name="btnSend">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>