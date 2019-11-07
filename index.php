<?php
  include('parts/header.php');
  include_once('parts/utils.php');
  include_once('parts/db.php');

function myMax($current, $new) {
    return $current < $new ? $new : $current;
}

$arr = array(10, 5, 3, 5, 1, 2, 5, 7, 4);

function reduce($arr, $func) {
  
  //spent two nights over this; throwing the towell in the ring
  
  return ' - 2 and 3 over my head<br><br>';
}

print("Max: " . reduce($arr, 'myMax') . "<br />");

class Car {
  private $totalFuel;
  private $totalMiles;
  private $milage;
  
  public function __construct($initialGas, $mpg) {
    $totalFuel = $initialGas;
    $milage = $mpg;
    $totalMiles = 0;
  }
  
  public function drive($miles) {
    $this->totalMiles += $miles;
    
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
