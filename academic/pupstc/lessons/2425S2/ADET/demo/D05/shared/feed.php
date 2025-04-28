<div class="card p-2">
  <form>
    <div class="h4">Create Post</div>
  </form>
</div>

<?php
  $feedQuery = "SELECT * FROM posts";
  $feedResult = executeQuery($feedQuery);

  while($feedRow = mysqli_fetch_assoc($feedResult)){
    echo '
      <div class="card my-3">
      <img src="img/'.$feedRow['picture'].'" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">'.$feedRow['title'].'</h5>
        <p class="card-text">'.$feedRow['content'].'</p>
      </div>
    </div>
    ';
  }
?>
