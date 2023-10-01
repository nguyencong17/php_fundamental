<?php
  // TOPIC : FUNCTIONS (Hàm)
  /**
   * Summary : 
   * Tự định nghĩa 1 functions/ arrow functions
   * Một số functions cho arrays
   */
  // Example 1 :
  $x = 123;
  function sayHello($name) { // tham số ở hàm gọi là arguments
    // echo "x = $x"; ==> Undefined
    global $x;
    echo "x = $x<br>"; // Result: x = 123 ==> cách viết đúng
    $y = 123;
    echo "Hello $name<br>";
  }
  // echo "y = $y"; ==> Undefined
  sayHello("Duy Cong"); // tham số ở hàm gọi lại là parameters

  /**
   * Note : 1 biến dù tạo ở global nhưng cũng không thể gọi trong 
   * function , vì thế hãy sử dụng global trước biến chỗ muốn
   * sử dụng
   */

  // Example 2 :

  // function sum($a = 0, $b = 0) {
  //   return $a + $b;
  // }

  // echo sum(1,2);

  /**
   * Note : Nếu không truyền tham số thì $a = 0 và $b = 0
   */

  // Example 3 : asign a varriable to a function (hán cho 1 biến)
  // $multiply = function($a, $b) {
  //   return $a * $b;
  // };

  // echo $multiply(3,4);

  // Example 4 : Arrow function
  // $subtract = fn($a, $b) => $a - $b;
  // echo $subtract(6,2);
?>