<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/assets/data/db.php';
require_once __DIR__ . '/partials/head.php';

?>

<body>
  
  <header class="mb-5 d-flex justify-content-center align-items-center">
    <h1 class="m-0">PHP OOP 1</h1>
  </header>

  <main>

    <div class="container">

      <div class="row">

        <div class="col-4 d-flex justify-content-center">

          <div class="card mb-5" style="width: 18rem;">
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

        <div class="col-4 d-flex justify-content-center">

          <div class="card mb-5" style="width: 18rem;">
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

        <div class="col-4 d-flex justify-content-center">

          <div class="card mb-5" style="width: 18rem;">
          <img src="<?php echo $scarface->path ?>" class="card-img-top" alt="<?php echo $scarface->title ?>">
            <div class="card-body">
              <h5 class="card-title"><?php $scarface->joinNameYear() ?></h5>
              <p class="card-text"><?php echo $scarface->description ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Generi:</li>
              <?php foreach($scarface->genres as $genre): ?>
                <li class="list-group-item"><?php echo $genre ?></li>
              <?php endforeach ?>
            </ul>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Attori:</li>
              <?php foreach($scarface->actors as $actor): ?>
                <li class="list-group-item"><?php echo $actor ?></li>
              <?php endforeach ?>
            </ul>
          </div>

        </div>

        <div class="col-4 d-flex justify-content-center">

          <div class="card mb-5" style="width: 18rem;">
          <img src="<?php echo $casino->path ?>" class="card-img-top" alt="<?php echo $casino->title ?>">
            <div class="card-body">
              <h5 class="card-title"><?php $casino->joinNameYear() ?></h5>
              <p class="card-text"><?php echo $casino->description ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Generi:</li>
              <?php foreach($casino->genres as $genre): ?>
                <li class="list-group-item"><?php echo $genre ?></li>
              <?php endforeach ?>
            </ul>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Attori:</li>
              <?php foreach($casino->actors as $actor): ?>
                <li class="list-group-item"><?php echo $actor ?></li>
              <?php endforeach ?>
            </ul>
          </div>

        </div>

        <div class="col-4 d-flex justify-content-center">

          <div class="card mb-5" style="width: 18rem;">
          <img src="<?php echo $avatar2->path ?>" class="card-img-top" alt="<?php echo $avatar2->title ?>">
            <div class="card-body">
              <h5 class="card-title"><?php $avatar2->joinNameYear() ?></h5>
              <p class="card-text"><?php echo $avatar2->description ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Generi:</li>
              <?php foreach($avatar2->genres as $genre): ?>
                <li class="list-group-item"><?php echo $genre ?></li>
              <?php endforeach ?>
            </ul>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Attori:</li>
              <?php foreach($avatar2->actors as $actor): ?>
                <li class="list-group-item"><?php echo $actor ?></li>
              <?php endforeach ?>
            </ul>
          </div>

        </div>

        <div class="col-4 d-flex justify-content-center">

          <div class="card mb-5" style="width: 18rem;">
          <img src="<?php echo $jumanji->path ?>" class="card-img-top" alt="<?php echo $jumanji->title ?>">
            <div class="card-body">
              <h5 class="card-title"><?php $jumanji->joinNameYear() ?></h5>
              <p class="card-text"><?php echo $jumanji->description ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Generi:</li>
              <?php foreach($jumanji->genres as $genre): ?>
                <li class="list-group-item"><?php echo $genre ?></li>
              <?php endforeach ?>
            </ul>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Attori:</li>
              <?php foreach($jumanji->actors as $actor): ?>
                <li class="list-group-item"><?php echo $actor ?></li>
              <?php endforeach ?>
            </ul>
          </div>

        </div>

      </div>

    </div>

  </main>

  <footer></footer>

</body>
</html>