<?php
include("connect.php");

$userID = '2';

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

$chatsQuery = "SELECT messages.receiverID, userinfo.firstName, userinfo.lastName FROM messages JOIN userinfo ON messages.receiverID = userinfo.userInfoID WHERE NOT receiverID='$userID' GROUP BY receiverID";
$chatsResult = executeQuery($chatsQuery);
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
    .mainRow {
      height: 100vh;
    }

    .card {
      height: 100%;
    }

    .chatBox {
      overflow: hidden;
    }

    .mainContainer {
      height: 100%;
    }

    .chatInput {
      width: 100%;
      height: auto;
    }

    .chatTextBox {
      border-radius: 100px 0px 0px 100px;
    }

    .btnSendChat {
      border-radius: 0px 100px 100px 0px;
    }

    .chatbubble-own-container {
      width: 100%;
    }

    .chatbubble-own {
      background-color: lightblue;
      padding: 10px 20px 10px 20px;
      border-radius: 20px;
      margin: 3px 10px 3px 10px;
      width: fit-content;
      margin-left: auto;
      max-width: 50%;
      color: #222222;
    }

    .chatbubble-other {
      padding: 10px 20px 10px 20px;
      border-radius: 20px;
      margin: 3px 10px 3px 10px;
      width: fit-content;
      max-width: 50%;
      border: 1px solid #222222;
      background-color: white;
      color: #222222;
    }

    .information {
      font-size: 8px;
      color: #d0d0d0;
      margin: 0px 10px 5px 10px;
    }

    .information-own {
      font-size: 8px;
      color: #d0d0d0;
      margin: 0px 10px 5px 10px;
      margin-left: auto;
      width: fit-content;
    }
  </style>
</head>

<body data-bs-theme="light">
  <div class="container-fluid">
    <div class="row mainRow p-3">
      <div class="col-3">
        <div class="card shadow rounded-5 chatBox">
          <div class="row shadow p-3">
            <div class="ps-3">
              <span class="h4">Chats</span>
            </div>
          </div>

          <?php
          if (mysqli_num_rows($chatsResult) > 0) {
            while ($chatsRow = mysqli_fetch_assoc($chatsResult)) {
              ?>
              <form>
                <button style="width: 100%; background-color: transparent; border: none"
                  value="<?php echo $chatsRow['receiverID'] ?>" type="submit" name="id">
                  <input type="hidden" value="<?php echo $chatsRow['firstName'] . " " . $chatsRow['lastName'] ?>"
                    name="fullName">
                  <div class="row shadow-sm ps-3 p-3">
                    <?php echo $chatsRow['firstName'] . " " . $chatsRow['lastName'] ?>
                  </div>
                </button>
              </form>

              <?php
            }
          }
          ?>

        </div>
      </div>
      <div class="col-9">
        <div class="card shadow rounded-5 chatBox">
          <div class="row shadow p-3">
            <div class="ps-3">
              <span class="h4"><?php echo $fullName ?></span>
            </div>
          </div>
          <div class="d-flex align-items-end flex-column" style="height: 68vh; overflow: scroll">
            <!-- <div class="mt-auto chatbubble-own">TEST1</div> -->
            <?php
            $counter = 0;
            if (mysqli_num_rows($messagesResult) > 0) {
              while ($message = mysqli_fetch_assoc($messagesResult)) {
                if ($counter == 0) {
                  ?>

                  <div class="mt-auto chatbubble-own-container">
                    <div
                      class="<?php if ($userID == $message['senderID']) {
                        echo "chatbubble-own";
                      } else {
                        echo "chatbubble-other";
                      } ?>">
                      <?php echo $message['message'] ?>
                    </div>
                    <div class="<?php if ($userID == $message['senderID']) {
                        echo "information-own";
                      } else {
                        echo "information";
                      } ?>">
                      <?php echo $message['dateTime']." . ".$message['status'] ?>
                    </div>
                  </div>

                  <?php
                } else {
                  ?>

                  <div class="chatbubble-own-container">
                    <div
                      class="<?php if ($userID == $message['senderID']) {
                        echo "chatbubble-own";
                      } else {
                        echo "chatbubble-other";
                      } ?>">
                      <?php echo $message['message'] ?></div>
                      <div class="<?php if ($userID == $message['senderID']) {
                        echo "information-own";
                      } else {
                        echo "information";
                      } ?>">
                      <?php echo $message['dateTime']." . ".$message['status'] ?>
                    </div>
                  </div>

                  <?php
                }
                $counter += 1;
              }
            } else {
              echo "<div>No chat history</div>";
            }
            ?>
          </div>
          <div class="d-flex align-items-end mainContainer" style="height: fit-content">
            <div class="card shadow p-4 chatInput">
              <form method="post">
                <div class="d-flex">
                  <input class="form-control p-3 chatTextBox" type="text" name="message">
                  <button class="btn btn-secondary btnSendChat">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>