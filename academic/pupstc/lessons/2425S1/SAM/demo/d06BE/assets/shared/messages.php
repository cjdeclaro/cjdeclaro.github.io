<div class="col-5 col-md-8">
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
              <div class="chatBubble <?php echo $className ?>">
                <?php echo $convo['message'] ?>
              </div>
              <div class="statusInfo-<?php echo $className ?>"><?php echo $convo['dateTime'] . "." . $convo['status'] ?></div>
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