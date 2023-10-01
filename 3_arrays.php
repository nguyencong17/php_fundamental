<?php
  // TOPIC : ARRAYS 
  /**
   * Mảng trong php lưu trữ 1 đối tượng(object) 
   * hay một danh sách các biến.
   * Mảng trong php chia làm 2 loại :
   * + Simple 
   * + Associative array
   */
  
  // Example 1 : Simple Array
  // $numbers = [1,3, 4,6]; 
  // $fruits = ['pineapple', 'melon', 'apple']; 
  // print_r($numbers);
  // print_r($fruits);
  // echo $fruits[2];

  // Example 2 : Associative array (key-value)
  // $colors = [
  //   3 => 'red',  // key - value
  //   5 => 'green',
  //   7 => 'blue',
  // ];

  // echo $colors[7].'<br>'; // $array[key] ==> value

  // key as string
  // $hex_colors = [
  //   'red' => '#ff0000',  // key - value
  //   'green' => "00ff00",
  //   'blue' => "0000ff",
  // ];
  // echo $hex_colors['blue']; // $array[key] ==> value

  // Example 3 :

  // $person = [
  //   'full_name' => 'Nguyen Duy Cong',  // key - value
  //   'age' => 24,
  //   'email' => "duycong1799@gmail.com",
  // ];

  // print_r($person);
  // echo $person['email'];

  // Example 4 :

  // $persons = [
  //   [
  //     'full_name' => 'Nguyen Duy Cong',  // key - value
  //     'age' => 24,
  //     'email' => "duycong1799@gmail.com",
  //   ],
  //   [
  //     'full_name' => 'Nguyen Thi Thao',  // key - value
  //     'age' => 18,
  //     'email' => "thaont@gmail.com",
  //   ],
  //   [
  //     'full_name' => 'Nguyen Duy Thanh',  // key - value
  //     'age' => 44,
  //     'email' => "thanhnd@gmail.com",
  //   ],
  // ];

  // print_r($persons);
  // echo $persons[1]['email'];
  // var_dump(json_encode($persons)); // biến tất cả thành string để giao tiếp vs ngôn ngữ khác
?>