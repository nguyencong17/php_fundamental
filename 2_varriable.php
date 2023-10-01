<?php
  // TOPIC : VARRIABLE (BIẾN)  
  /**
   * Summary : 
   * + Define a varriable / constant (Định nghĩa 1 biến, hằng)
   * + Varriable's types (Các kiểu dữ liệu của biên : int, flaot, boolean,string, ...)
   */
  // Example 1 : Varriable
  $name = "Duy Cong"; // String
  echo $name;
  $age = 18;          // Integer
  echo $age;
  $has_car = true;   // Boolean
  echo $has_car;
  
  // Result : Duy Cong18 

  var_dump($has_car);
  // Result : bool(true);


  $product_price = 22.15;
  var_dump($product_price);
  // Result : float("22.15");

  /* Note : Nếu falsy thì không hiện ra cái gì , 
  nếu truthy thì hiện ra số 1
  */ 

  // Example 2 : String concatenation (Nối nhiều biến và chuỗi)
  // Way 1 : Traditional
  echo '<br>'.$name.' is '.$age.' years old '.'<br>';
  // Way 2 : Better Write (Dùng " ")
  echo "$name is $age years old";
  echo "${name} is ${age} years old"; 

  // Example 3 : Expression
  echo '1' + '3'; // 4 (js ra 13 nghia la cong chuoi, php cong nhu so nguyen)
  echo 5 * "3";
  echo 10 / "2";
  echo 10 % 3;
  /**
   * Nếu là chuối php tự động chia như số
   * Nếu mẫu = 0 sẽ lỗi
   */

   // Example 4 : Constants
   define('SERVER_NAME', 'localhost');
   define('DATABASE_NAME', 'test_db');
   echo "server: ".SERVER_NAME.', db : '.DATABASE_NAME;
?>