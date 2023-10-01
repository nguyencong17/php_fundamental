<?php
  /**
   * Some built-in function for string
   * */
  $full_name = "Nguyen Duy Cong";

  // 1. strlen() : Độ dài của chuỗi  
  // echo "length: " . strlen($full_name);

  // 2. strrev : Đảo ngược chuỗi
  // echo strrev($full_name);  

  // 3. strtoLower : Đổi hết sang chữ thường
  // echo strtolower($full_name);

  // 4. strtoLower : Đổi hết sang chữ hoa
  // echo strtoupper($full_name);

  // 5. find and replace : Tìm và thay thế
  // echo str_replace(' ', '-', $full_name); // => str_replace('find-key', 'replace', varriable)

  // 6. str_starts_with() : Kiểm tra chuỗi xem có bắt đầu bằng 1 chuỗi nào không
  // if(str_starts_with(strtolower($full_name), 'nguyen')) {
  //   echo "His name start with nguyen<br>";
  // }

  // 7. str_ends_with() : Kiểm tra chuỗi xem có kết thúc bằng 1 chuỗi nào không 
  // if(str_ends_with(strtolower($full_name), 'cong')) {
  //   echo "His name ends with cong<br>";
  // }
    
  // 8. htmlspecialchars() : In tất cả kể cả thẻ html 
  // echo "<h1>html string</h1>"; 
  // echo htmlspecialchars("<h1>html string</h1>");

  /**
   * Note : Như line 33 thì sẽ in compile ra 1 thẻ html, vậy nếu muốn in ra tất cả kể thẻ html thì sao ? 
   * Dùng htmlspecialchars() sẽ biến tất cả thành string , trong bảo mật nếu in bình thường thì nếu nhét 
   * script js vào thì có khả năng bị tấn công , nên nếu dùng htmlspecialchars() sẽ biến thành string thì 
   * sẽ không chạy được , và hàm này thường được dùng để lấy data trong form
   */

  // 9. printf() : Nối chuỗi
  // printf('%s likes %s', "<h1>Duy Cong</h1>", "G63");
  // printf('%s likes %s', "Duy Cong", "G63");
  // printf('pi = %f', 3.14);
  // printf('1 so nguyen = %d', 10);

  /**
   * %s : string
   * %f : số thực
   * %d : số nguyên
   */
?>