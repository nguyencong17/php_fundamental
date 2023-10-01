<?php
  // TOPIC : COOKIES 
  /**
   * Summary : 
   * + Session là nơi lưu trữ trên serve về thì có thể sử trên
   * nhiều trang khác nhau
   */
  // 1. Ví dụ về 1 trang đăng nhập
  session_start();
  if(isset($_POST['submit'])) {
    // $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    if($email == 'cong@gmail.com'
    && $password == '1234') {
      $_SESSION['email'] = $email;
      header('Location: 0_dashboard.php');
    } else {
      echo "Incorrect email/password";
    }
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>FORM LOGIN</h1>
  <form 
    action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="POST"
  >
    <div>
      <label for="email">Your email:</label>
      <input type="email" name="email">
    </div>
    <div>
      <label for="password">Your password:</label>
      <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>