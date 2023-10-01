<?php
  /**
   * Some built-in function for array
   * */
  // $names = ['john', 'anna', 'cong', 'tony'];
  
  // 1. Count 
  // echo "number of items : ".count($names); 

  // 2. Search inside array
  // var_dump((in_array('cong', $names))); 

  // 3. Insert an item (thêm vào cuối cùng, kết quả trả về mảng mới)
  // array_push($names, 'elon','tom');
  // print_r($names);

  // 4. Insert an item to the beginning of the array (thêm vào đầu mảng, kết quả trả về mảng mới)
  // array_unshift($names, "satoshi");
  // print_r($names);

  // 5. Get last item of the array (lấy ra phân tử cuối cùng của mảng)
  // echo array_pop($names);
  
  // 6. Get first item of the array (lấy ra phân tử đầu tiên của mảng)
  // echo array_shift($names);

  // 7. Remove random item (Xóa 1 item bất kì) 
  // unset($names[3]);

  // 8. Chunk a array (chặt mảng)
  // $chunked_array = array_chunk($names, 2);

  // print_r($names);

  // 9. Merge array (Gộp mảng)
  // $arr_1 = [1,3,5];
  // $arr_2 = [2,4,6];

  // $mer_arr = array_merge($arr_1, $arr_2);
  // print_r($mer_arr);

  // 10. Spread Operator (Clone aray : tạo ra 1 vùng nhớ mới)
  // $spread_arr = [1,4,6,8,9,2,10];
  // $arr_3 = [...$spread_arr]; // clone array
  // print_r($arr_3);

  // 11. Merge and clone
  // $arr_4 = [...$arr_1, ...$arr_2];
  // print_r($arr_4);

  // 12. Combine two arrays
  // $a = ['name','email','age'];
  // $b = ['Duy Cong', 'duycong1799@gmail.com', 18];
  // $c = array_combine($a, $b);
  // print_r($c); 
  // print_r(array_flip($c)); // đảo key - value
  // print_r(array_keys($c));  // lấy key
  // print_r(array_values($c)); // lấy value

  // 13. Create array from a range
  // $numbers = range(0, 10);
  // print_r($numbers);

  // 14. Map an array to another array 
  /**
   * Ánh xạ 1 mảng này tới 1 mảng kahcs có cùng độ dài 
   * nhưng giá trị(value) lại khác
   */
  // $squared_numbers = array_map(fn($each_number) =>
  //   $each_number * $each_number
  // , $numbers);
  // print_r($squared_numbers);

  // 15. Filter an array
  // $filteres_numbers = array_filter($numbers,
  // fn($each_number) => $each_number % 2 == 0);

  // print_r(($filteres_numbers));
?>