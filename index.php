<?php
  include('parts/header.php');
  include_once('parts/utils.php');
  include_once('parts/db.php');

function myMax($current, $new) {
    return $current < $new ? $new : $current;
}

$arr = array(10, 5, 3, 5, 1, 2, 5, 7, 4);

function reduce($arr, $func) {
  //over my head
}

print("Max: " . reduce($arr, 'myMax') . "<br />");


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
