<?php

class Movie {

  public $name;
  public $description;
  public $genre;
  public $actors;
  public $year;

  public function __construct(string $_name, string $_description, string $_genre, array $_actors, int $_year){
    $this->name = $_name;
    $this->description = $_description;
    $this->genre = $_genre;
    $this->actors = $_actors;
    $this->year = $_year;
  }

  public function joinNameYear(){
    echo "$this->name - $this->year";
  }

}

$matrix = new Movie('The Matrix', 'Il miglior film di fantascienza', 'Fantascienza' , ['Keanu Reeves', 'Carrue-Anne Moss', 'Laurence Fishburne'], 1999);
$oppenheimer = new Movie('Oppenheimer', 'Il miglior film drammatico', 'Drammatico' , ['Cilian Murphy', 'Florence Pugh', 'Robert Downey Jr.'], 2023);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>PHP OOP 1</title>
</head>
<body>
  
  <div class="container">

    <div class="row">

      <div class="col">

        <h1><?php $matrix->joinNameYear() ?></h1>
        <h3><?php echo $matrix->genre ?></h3>
        <ul>
          <?php foreach($matrix->actors as $actor): ?>
            <li><?php echo $actor ?></li>
          <?php endforeach ?>
        </ul>
        <p><?php echo $matrix->description ?></p>

      </div>

      <div class="col">

        <h1><?php $oppenheimer->joinNameYear() ?></h1>
        <h3><?php echo $oppenheimer->genre ?></h3>
        <ul>
          <?php foreach($oppenheimer->actors as $actor): ?>
            <li><?php echo $actor ?></li>
          <?php endforeach ?>
        </ul>
        <p><?php echo $oppenheimer->description ?></p>

      </div>

    </div>

  </div>

</body>
</html>