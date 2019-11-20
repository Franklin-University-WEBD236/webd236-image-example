<?php
  

$d = dir("/tmp/private/");
while(false !== ($entry = $d->read())){
  echo "<p>" . $entry . "</p>";
}