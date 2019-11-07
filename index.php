<?php
  include('parts/header.php');
  include_once('parts/utils.php');
  include_once('parts/db.php');

function myMax($current, $new) {
    return $current < $new ? $new : $current;
}

$arr = array(10, 5, 3, 5, 1, 2, 5, 7, 4);

function reduce($arr, $func) {
  $curr = 0;
  while(count($arr) > 0) {
    $max = array_pop();
  }
}

echo '# 2 and 3 over my head. Spent two nights on these and I am throwing my towel in the ring';

print("Max: " . reduce($arr, 'myMax') . "<br />");

class Car {
  private $totalFuel;
  private $totalMiles;
  private $milage;
  
  public function __construct($initialGas, $mpg) {
    $this->totalFuel = $initialGas;
    $this->milage = $mpg;
    $this->totalMiles = 0;
  }
  
  public function drive($miles) {
    $maxMiles = $this->totalFuel * $this->milage;
    if ($maxMiles < $miles) {
      $this->totalMiles += $maxMiles;
      $this->totalFuel = 0;
    }
    else {
      $this->totalMiles += $miles;
      $this->totalFuel -= ($miles/$this->milage);
    }
  }
  
  public function addGas($gallons) {
    $this->totalFuel += $gallons;
  }
  
  public function readFuelGauge() {
    return $this->totalFuel;
  }
  
  public function readOdometer() {
    return $this->totalMiles;
  }
  
  public function __toString() {
        return 'Car (gas: ' . $this->readFuelGauge() .
            ', miles: ' . $this->readOdometer() . ')';
    }
}

$car = new Car(20, 25);
$car -> drive(25);
print($car . '<br />');
$car -> drive(1000);
print($car . '<br />');
$car -> addGas(5);
$car -> drive(10);
print($car . '<br />');

include('parts/footer.php'); ?>
