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

        <?php foreach($movies as $movie): ?>
        <div class="col-4 d-flex justify-content-center">

          <div class="card mb-5" style="width: 18rem;">
            <img src="<?php echo $movie->path ?>" class="card-img-top" alt="<?php echo $movie->title ?>">
            <div class="card-body">
              <h5 class="card-title"><?php $movie->joinNameYear() ?></h5>
              <p class="card-text"><?php echo $movie->description ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Generi:</li>
              <?php foreach($movie->genres as $genre): ?>
                <li class="list-group-item"><?php echo $genre ?></li>
              <?php endforeach ?>
            </ul>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold ">Attori:</li>
              <?php foreach($movie->actors as $actor): ?>
                <li class="list-group-item"><?php echo $actor ?></li>
              <?php endforeach ?>
            </ul>
          </div>

        </div>
        <?php endforeach ?>

      </div>

    </div>

  </main>

  <footer></footer>

</body>
</html>