<div class="col-8">
  <div class="card shadow rounded-5 chatBox">
    <div class="row shadow p-3">
      <div class="ps-3">
        <span class="h4"><?php echo $fullName ?></span>
      </div>
    </div>
    <div class="d-flex align-items-end flex-column" style="height: 68vh; overflow: scroll">
      <?php
      $counter = 0;
      if (mysqli_num_rows($messagesResult) > 0) {
        while ($message = mysqli_fetch_assoc($messagesResult)) {
          if ($counter == 0) {
            ?>

            <div class="mt-auto chatbubble-own-container">
              <div class="<?php if ($userID == $message['senderID']) {
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
                <?php echo $message['dateTime'] . " . " . $message['status'] ?>
              </div>
            </div>

            <?php
          } else {
            ?>

            <div class="chatbubble-own-container">
              <div class="<?php if ($userID == $message['senderID']) {
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
                <?php echo $message['dateTime'] . " . " . $message['status'] ?>
              </div>
            </div>

            <?php
          }
          $counter += 1;
        }
      } else {
        echo "<div style='width: 100%; padding-top: 40px' class='text-center'>No chat history</div>";
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