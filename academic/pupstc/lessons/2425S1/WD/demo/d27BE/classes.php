<?php
class Card
{
  public $articleID;
  public $title;
  public $content;
  public $authors = array();

  public function __construct($articleID, $title, $content)
  {
    $this->articleID = $articleID;
    $this->title = $title;
    $this->content = $content;

    $this->getAuthorsViaQuery();
  }

  public function buildCard()
  {
    return
    '
      <div class="card p-5 rounded-5 my-4 shadow">
        <div class="h3 mb-3">
          '.$this->title.'
        </div>
        <div class="my-3">
          '.$this->content.'
        </div>
        <div class="my-3">
          '.implode(", ",$this->authors).'
        </div>
      </div>
    ';
  }

  public function getAuthorsViaQuery(){
    $authorsQuery = "SELECT * FROM userArticles JOIN users ON userArticles.userID =  users.userID WHERE articleID = '$this->articleID'";
    $authorsResult = executeQuery($authorsQuery);

     while($authorRow = mysqli_fetch_assoc($authorsResult)){
        array_push($this->authors, $authorRow['firstName']." ".$authorRow['lastName']);
     }
  }
}
?>