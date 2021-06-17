<?php
  require_once __DIR__ . "/classes/Film.php";
  require_once __DIR__ . "/classes/Attore.php";

  $film1 = new Film('horror','James Wan');
  $film1->name = "The Conjuring - L'evocazione";
  $film1->time = "1h 52m";
  $film1->setFilmYear(2013);

  $film2 = new Film('horror','James Wan');
  $film2->name = "The Conjuring - Il caso Enfield";
  $film2->time = "2h 14m";
  $film2->setFilmYear(2016);

  $film3 = new Film('horror','James Wan');
  $film3->name = "The Conjuring – Per ordine del diavolo";
  $film3->time = "1h 52m";
  $film3->setFilmYear(2021);

  $attore1 = new Attore('Lorraine Warren');
  $attore1->name = 'Vera';
  $attore1->lastname = 'Farmiga';
  $attore1->setAgeAttore('47 anni');

  $attore2 = new Attore('Ed Warren');
  $attore2->name = 'Patrick';
  $attore2->lastname = 'Wilson';
  $attore2->setAgeAttore('47 anni');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>PRIMO FILM</h1>
  <h1>Titolo: <?php echo $film1->name?></h1>
  <h2><?php echo $film1->getInfoFilm() ?></h2>
  <h3>Durata: <?php echo $film1->time?></h3>
  <h2>Data distribuzione: <?php echo $film1->getFilmYear() ?></h2>

  <h2>Cast</h2>
  <h1><?php echo $attore1->name ?> <?php echo $attore1->lastname ?> <?php echo $attore1->getInfoAttore() ?></h1>
  <h1><?php echo $attore2->name ?> <?php echo $attore2->lastname ?> <?php echo $attore2->getInfoAttore() ?></h1>


  <h1>SECONDO FILM</h1>
  <h1>Titolo: <?php echo $film2->name?></h1>
  <h2><?php echo $film2->getInfoFilm() ?></h2>
  <h3>Durata: <?php echo $film2->time?></h3>
  <h2>Data distribuzione: <?php echo $film2->getFilmYear() ?></h2>

  <h2>Cast</h2>
  <h1><?php echo $attore1->name ?> <?php echo $attore1->lastname ?> <?php echo $attore1->getInfoAttore() ?></h1>
  <h1><?php echo $attore2->name ?> <?php echo $attore2->lastname ?> <?php echo $attore2->getInfoAttore() ?></h1>

  <h1>TERZO FILM</h1>
  <h1>Titolo: <?php echo $film3->name?></h1>
  <h2><?php echo $film3->getInfoFilm() ?></h2>
  <h3>Durata: <?php echo $film3->time?></h3>
  <h2>Data distribuzione: <?php echo $film3->getFilmYear() ?></h2>

  <h2>Cast</h2>
  <h1><?php echo $attore1->name ?> <?php echo $attore1->lastname ?> <?php echo $attore1->getInfoAttore() ?></h1>
  <h1><?php echo $attore2->name ?> <?php echo $attore2->lastname ?> <?php echo $attore2->getInfoAttore() ?></h1>


  <h1>Ho creato <?php echo Film::getContatoreFilm() ?> istanze nei film e <?php echo Attore::getContatoreAttore() ?> istanze negli attori </h1>
</body>
</html>