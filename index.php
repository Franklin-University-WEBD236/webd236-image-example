<?php
  include('parts/header.php');
  include_once('parts/utils.php');
  include_once('parts/db.php');

$maxFun = function myMax($current, $new) {
    return $current < $new ? $new : $current;
}

$arr = array(10, 5, 3, 5, 1, 2, 5, 7, 4);

function reduce($arr, $maxFun) {
  
  
}

php include('parts/footer.php'); ?>
