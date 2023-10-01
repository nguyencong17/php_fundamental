<?php
  session_start();
  session_destroy(); // Xóa Session 
  header('Location: /11_session.php'); // chuyển về trang session
?>