<div class="col-5 col-md-2">
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