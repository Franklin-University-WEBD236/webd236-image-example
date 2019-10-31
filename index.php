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

  function removeAllValuesMatching($arr, $elem) {
    
    foreach($arr as $key => $el) {
      if($el == $elem) {
        unset($arr[$key]);
      }
    }
    return $arr;
  }

  function findSpellings($word, $allWords) {
    $retstr = '';
    if(array_search($word, $allWords)) {
      $retstr = "Word '$word' found!";
    }
    else {
      $sndX = soundex($word);
      $found = FALSE;
      foreach($allWords as $wrd) {
        if($sndX == soundex($wrd)) {
          $retstr = "Word '$word' was misspelled. According soundex test it could be '$wrd'";
          $found = TRUE;
          break;
        }
      }
      if(!$found) {
        $retstr = "Word '$word' was badly misspelled or is not in dictionary. Try again...";
      }
    }
    return $retstr;
  }

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
  
  $val = "two";
  echo "3.";
  echo '<br>';
  echo 'Original array:<br>';
  print_r($arr);
  echo '<br><br>Value "'. $val . '" removed:<br>';
  print_r(removeAllValuesMatching($arr, $val));
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

//checking only words starting with letter 'q'
  $dictionary = array(
    'qualification',
    'qualify',
    'quality',
    'quantity',
    'quarter',
    'quarterback',
    'quarterly',
    'queen',
    'question',
    'quick',
    'quiet', 
    'quit',
    'quite',
    'quiz',
    'quotation',
    'quote',
    'quote');

//test with misspelled word
  $word = 'quiuz';
  echo '<br>';
  echo findSpellings($word, $dictionary);
  echo '<br><br>';

//test with a word not in dictionary
  $word = 'about';
  echo findSpellings($word, $dictionary);
  echo '<br><br>';

//test with a word in dictionary
  $word = 'queen';
  echo findSpellings($word, $dictionary);
?>
  
<?php include('parts/footer.php'); ?>
