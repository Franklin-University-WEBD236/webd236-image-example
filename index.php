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

  echo '2. ' . print_r(testArr()) . '<br><br>';

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

?>


  
<?php include('parts/footer.php'); ?>
