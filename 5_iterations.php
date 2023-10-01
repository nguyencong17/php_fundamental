<?php
  // TOPIC : ITERATOR / LOOP (VÒNG LẶP)  
  /**
   * Summary : 
   * for loop, foreach
   * while, dowhile
   */
  // Example 1 : For
  // for($i = 0; $i <= 10; $i++) {
  //   echo "i = $i<br>";
  // }
  $fruits = ['pineapple', 'melon', 'apple'];
  // for($i = 0; $i < count($fruits); $i++) {
  //   echo "$fruits[$i]<br>";
  // } 

  // Example 2 : while
  // $i = 2;
  // while($i < 20) {
  //   echo "i = $i<br>";
  //   $i++;
  // }

  // Example 3 : do While
  // do {
  //   echo "i = $i<br>";
  //   $i++;
  // } while ($i <= 10);

  // Example 4 : foreach for simple array
  // foreach($fruits as $fruit) {
  //   echo "$fruit<br>";
  // }

  // foreach($fruits as $index => $fruit) {
  //   echo "$index - $fruit<br>";
  // }

  // Example 5 : foreach for associative arrays
  // $person = [
  //   'full_name' => 'Nguyen Duy Cong',  // key - value
  //   'age' => 24,
  //   'email' => "duycong1799@gmail.com",
  // ];

  // foreach($person as $key => $value) {
  //   echo "$key : $value<br>";
  // }
?>