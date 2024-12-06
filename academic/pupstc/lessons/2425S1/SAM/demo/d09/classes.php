<?php
class Appliance{
  public $category;
  public $itemCode;
  public $description;

  public function __construct($category, $itemCode, $description){
    $this->category = $category;
    $this->itemCode = $itemCode;
    $this->description = $description;
  }

  public function generateCard(){
    return '
    <div class="col-6 my-3">
      <div class="card p-4 rounded-5">
        <div class="h3">
          '.$this->description.'
        </div>
        <div class="mb-3 text-secondary">
          '.$this->category.'
        </div>
        <div class="mb-3">
          '.$this->itemCode.'
        </div>
      </div>
    </div>
    ';
  }
}
?>