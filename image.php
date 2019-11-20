<?php

//header("Content-Type: image/jpeg");

if($_GET['path'] == "kitten"){
  $content = file_get_contents("https://cdn.glitch.com/0d13f134-5376-4b76-963e-4b1147ae2920%2Fkitten-report.jpg?v=1574209880794");
}
else if($_GET['path'] == "dog"){
  $content = file_get_contents("https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/12231413/Labrador-Retriever-MP.jpg");
}

echo $content;  

?>