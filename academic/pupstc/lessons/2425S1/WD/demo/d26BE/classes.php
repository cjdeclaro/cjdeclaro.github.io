<?php
class Card
{
  public $title;
  public $content;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
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
      </div>
    ';
  }
}
?>