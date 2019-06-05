<?php
  class Car{
    //use keywords like var, private, public, protected to declare variables in OOP
    public $wheels = 4; //available to all
    protected $engine = 1; //available to this class and its sub-classes
    private $hood = 1; //available only to this class
    static $doors = 4; //attached to this class not its instances
    function __construct(){
      echo "$this->wheels wheels go round and round";
    }

    function showProperty(){
      echo $this->engine;
    }

    function showDoors(){
      echo Car::$doors;
    }
  }

  $bmw = new Car();
  //echo $bmw->wheels;

  //$bmw->doors = 2;
  //echo $bmw->doors;

  echo Car::$doors;

  //echo $bmw->engine will result in error

  echo $bmw->showProperty();
  echo $bmw->showDoors();
  echo "<br/>";

  class Plane extends Car{
    var $wheels = 10;
    function showEngine(){
      echo $this->engine;
    }
  }

  $jet = new Plane();
  echo $jet->showEngine();

  // if(class_exists('car')){
  //   echo 'yes!';
  // }

  // if(method_exists('car', 'moveWheels')){
  //   echo 'method exist!';
  // }
?>