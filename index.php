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
  $retval = 0;
  foreach($arr as $el) {
    $retval = $func($curr, $el);
    $curr = $el;
  }
  return $retval;
}

print("Max: " . reduce($arr, 'myMax') . "<br />");


include('parts/footer.php'); ?>
