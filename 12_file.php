<?php
  // TOPIC : FILE
  /**
   * Summary : 
   * + Mở và đọc file text
   * + Upload 1 hình ảnh lên serve
   */

  // 1. Đọc và viết file 
  $file_path = './assets/fruits.txt';
  if(file_exists($file_path)) {
    echo readfile($file_path);
    // 31 - number of bytes of the file
  }

  // Way 2 :
  // Way 3 :
  // Way 4 :
  // Way 5 :
  // Way 6 :
?>