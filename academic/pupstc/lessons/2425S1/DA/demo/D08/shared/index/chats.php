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
          <button style="width: 100%; background-color: transparent; border: none" value="<?php echo $chatsRow['userID'] ?>"
            type="submit" name="id">
            <input type="hidden" value="<?php echo $chatsRow['firstName'] . " " . $chatsRow['lastName'] ?>" name="fullName">
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