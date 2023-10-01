<?php
  // TOPIC : COOKIES 
  /**
   * Summary : 
   * + Cookies là nơi lưu dữ liệu trên trình duyệt / hay trên Client
   * + Cookies có thời hạn nào đó , không cần thì xóa đi
   */

  // 1. Lưu cookies 
  setcookie('name', 'Cong', time() + 24*3600);
  // setcookie(name, value, expired);
  // 1month = 24*3600*30

  // 2. Lấy cookies từ trình duyệt
  if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
  }

  // 3. Xóa cookies bằng cách setcookies tại thời điểm trong quá khứ
  setcookie('name', '', time() - 24*3600);
?>