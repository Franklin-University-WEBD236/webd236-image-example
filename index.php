<?php
  include('parts/header.php');
  include_once('parts/utils.php');
  include_once('parts/db.php');

class Car {
  private $fuel;
  private $miles;
  private $milage;
  
  public function __construct($initialGas, $mpg) {
    $fuel = $inigialGas;
    $milage = $mpg;
    $miles = 0;
  }
}


include('parts/footer.php'); ?>
