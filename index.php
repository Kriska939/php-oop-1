<?php

/* ESERCIZIO OOP: 

create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza (proprietà)
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump  */

// definizione di classe "Movie":

class Movie
{

 // dichiarazione delle proprietà:
  public $name;
  public $year;
  public $cast;
  public $genre;
  public $id;

  // definizione del costruttore:
  public function __construct($_name, $_year,  $_cast,  $_genre, $_id)
  {
    $this->name = $_name;
    $this->year = $_year;
    $this->cast = $_cast;
    $this->genre = $_genre;
    $this->id = $_id;
  }

  // metodo: 

  public function get_id()
    {
        return $this->id;
    }

}

$movie_1 = new Movie('Dune', '2021' ,'Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin', 'Fantascientifico', '23');
$movie_2 = new Movie('The Ring', '2002' ,'Naomi Watts, Martin Henderson, David Dorfman, Brian Cox, Daveigh Chase', 'Horror', '34');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movies</title>
</head>
<body>
    <h1>Movies:</h1>

    <div class="movie-container">
        <h3>Titolo: <?= $movie_1->name ?></h3>
        <p>Anno d'uscita: <?= $movie_1->year ?></p>
        <p>Cast principale: <?= $movie_1->cast ?></p>
        <p>Genere: <?= $movie_1->genre ?></p>
        <p>Id: <?=$movie_1->get_id()?></p>
    </div>

    <div class="movie-container">
        <h3>Titolo: <?= $movie_2->name ?></h3>
        <p>Anno d'uscita: <?= $movie_2->year ?></p>
        <p>Cast principale: <?= $movie_2->cast ?></p>
        <p>Genere: <?= $movie_2->genre ?></p>
        <p>Id: <?=$movie_2->get_id()?></p>
    </div>
</body>
</html>