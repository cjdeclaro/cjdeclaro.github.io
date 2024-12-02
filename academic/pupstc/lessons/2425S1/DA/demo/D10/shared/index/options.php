<div class="col">
  <div class="d-flex flex-column">
    <a href="login.php" class="mb-4">
      <button class="btn btn-secondary">Log out</button>
    </a>
    <div class="h6">
      Members
    </div>
    <?php while($membersRow = mysqli_fetch_assoc($membersResult)) { ?>
    <div class="my-1">
      <a href="./?id=<?php echo $membersRow['userID'] ?>&fullName=<?php echo $membersRow['firstName'].' '.$membersRow['lastName'] ?>" <?php echo $style?>>
      <?php echo $membersRow['firstName'].' '.$membersRow['lastName'] ?>
      </a>
    </div>
    <?php } ?>
  </div>
</div>