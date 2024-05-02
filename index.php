<?php

class Movie {

  public $title;
  public $description;
  public $genres;
  public $actors;
  public $year;
  public $path;

  public function __construct(string $_title, string $_description, array $_genres, array $_actors, int $_year, string $_path){
    $this->title = $_title;
    $this->description = $_description;
    $this->genres = $_genres;
    $this->actors = $_actors;
    $this->year = $_year;
    $this->path = $_path;
  }

  public function joinNameYear(){
    echo "$this->title - $this->year";
  }

}

$matrix = new Movie('The Matrix', 'Il miglior film di fantascienza', ['Fantascienza'] , ['Keanu Reeves', 'Carrue-Anne Moss', 'Laurence Fishburne'], 1999,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcgBJGoclqi7UrGpMr3meUb_OeZd8XovrTL2HLUSds7g&s');
$oppenheimer = new Movie('Oppenheimer', 'Il miglior film drammatico', ['Drammatico', 'Thriller'] , ['Cilian Murphy', 'Florence Pugh', 'Robert Downey Jr.'], 2023,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStBSpaKZ6uqhddYTBWeldprDBIM0qYm4dfzWalGsjgdg&s');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/style/style.css">
  <title>PHP OOP 1</title>
</head>
<body>
  
  <div class="container">

    <div class="row">

      <div class="col-4">

        <div class="card my-5" style="width: 18rem;">
          <img src="<?php echo $matrix->path ?>" class="card-img-top" alt="<?php echo $matrix->title ?>">
          <div class="card-body">
            <h5 class="card-title"><?php $matrix->joinNameYear() ?></h5>
            <p class="card-text"><?php echo $matrix->description ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bold ">Generi:</li>
            <?php foreach($matrix->genres as $genre): ?>
              <li class="list-group-item"><?php echo $genre ?></li>
            <?php endforeach ?>
          </ul>
          <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bold ">Attori:</li>
            <?php foreach($matrix->actors as $actor): ?>
              <li class="list-group-item"><?php echo $actor ?></li>
            <?php endforeach ?>
          </ul>
        </div>

      </div>

      <div class="col-4">

        <div class="card my-5" style="width: 18rem;">
        <img src="<?php echo $oppenheimer->path ?>" class="card-img-top" alt="<?php echo $oppenheimer->title ?>">
          <div class="card-body">
            <h5 class="card-title"><?php $oppenheimer->joinNameYear() ?></h5>
            <p class="card-text"><?php echo $oppenheimer->description ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bold ">Generi:</li>
            <?php foreach($oppenheimer->genres as $genre): ?>
              <li class="list-group-item"><?php echo $genre ?></li>
            <?php endforeach ?>
          </ul>
          <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bold ">Attori:</li>
            <?php foreach($oppenheimer->actors as $actor): ?>
              <li class="list-group-item"><?php echo $actor ?></li>
            <?php endforeach ?>
          </ul>
        </div>

      </div>

    </div>

  </div>

</body>
</html>