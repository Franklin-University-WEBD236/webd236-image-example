<?php
  
$path = "/tmp/private/";
$d = dir($path);
while(false !== ($entry = $d->read())){
  if($entry != "." && $entry != ".."){
    $data = base64_encode(file_get_contents($path . $entry));
    echo "<p><img src='data:image/jpeg;base64," . $data . "' style='width: 400px;' /></p>";
  }
}