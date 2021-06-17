<?php

  class Film{
    public $name;
    public $genre;
    public $author;
    public $time;
    private $year;
    static $contatore = 0;

    public function __construct($_genre, $_author)
    {
      $this->genre = $_genre;
      $this->author = $_author;
      self::$contatore++;
    }

    public function getInfoFilm(){
      return "Genere: " .$this->genre . "<br> Regista: " .$this->author;
    }

    public function setFilmYear($_year)
    {
      $this->year = $_year;
    }

    public function getFilmYear()
    {
      return $this->year;
    }

    static function getContatoreFilm(){
      return self::$contatore;
    }
  }

?>