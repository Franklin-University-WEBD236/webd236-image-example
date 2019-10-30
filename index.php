<?php
  include('parts/header.php');
  include_once('parts/utils.php');
  include_once('parts/db.php');
  
  function removeDuplicates($arr) {
      asort($arr);
      $prev_el = NULL;
      $prev_key = NULL;
      $flag = FALSE;
      foreach($arr as $key=>$el) {
        if($flag) {
          if($prev_el == $el) {
            unset($arr[$key]);
            unset($arr[$prev_key]);
          }
        }
        $prev_el = $el;
        $prev_key = $key;
        $flag = TRUE;
      }
      return $arr;
    }

  function testArr() {
    $arr = array();
    $arr[4] = 'four';
    $arr['three'] = 3;
    $arr[] = 'What\'s my index?';
    return $arr;
  }

  function removeAllValuesMatching($arr, $elem) {
    
    foreach($arr as $key => $el) {
      if($el == $elem) {
        unset($arr[$key]);
      }
    }
    return $arr;
  }

  function findSpellings($word, $allWords) {
    
    
    
  }
  
  echo '2. ' ;
  
  echo print_r(testArr());
  echo '<br><br>';

  $arr = array(
   'a' => "one",
   'b' => "two",
   'c' => "three",
   'd' => "two",
   'e' => "four",
   'f' => "five",
   'g' => "three",
   'h' => "two"
  );
  echo '3. ';
  print_r(removeAllValuesMatching($arr, "two"));
  echo '<br><br>';

  $arr = array(
                   'a' => "one",
                   'b' => "two",
                   'c' => "three",
                   'd' => "two",
                   'e' => "four",
                   'f' => "five",
                   'g' => "three",
                   'h' => "two"
                );
                
  echo '4. Original array:<br>';
  print_r($arr);
  echo '<br><br>Duplicates removed:<br>';
  print_r(removeDuplicates($arr));
  
  echo '<br><br>5. ';
?>
  
<?php include('parts/footer.php'); ?>
