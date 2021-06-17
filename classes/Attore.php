<?php

  class Attore{
    public $name;
    public $lastname;
    public $interprets;
    private $age;
    static $contatore = 0;

    public function __construct($_interprets)
    {
      $this->interprets = $_interprets;
      self::$contatore++;
    }

    public function getInfoAttore(){
      return "nei panni di: " .$this->interprets;
    }

    public function setAgeAttore($_age)
    {
      $this->year = $_age;
    }

    public function getAgeAttore()
    {
      return $this->age;
    }

    static function getContatoreAttore()
    {
      return self::$contatore;
    }
  }

?>