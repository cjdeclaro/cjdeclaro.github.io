<?php

class Person {
  public $firstName;
  public $lastName;
  public $age;

  public function __construct($f, $l, $a){
    $this->firstName = $f;
    $this->lastName = $l;
    $this->age = $a;
  }

  public function getFullName(){
    return $this->firstName." ".$this->lastName;
  }
}

class Animal {
  public $name;
  public $kind;
  public $owner;
  public $age;

  public function __construct($n, $k, $o, $a){
    $this->name = $n;
    $this->kind = $k;
    $this->owner = $o;
    $this->age = $a;
  }
}

$john = new Person("John", "Doe", 32);
$browny = new Animal("Browny", "Fish", $john, 55);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="col">
      <div class="row">
        <div class="h1">
          <?php echo $browny->owner->getFullName() ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>