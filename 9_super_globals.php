<?php
  // TOPIC : SUPER GLOBALS 
  /**
   * Summary : 
   * Các biến đã có sẵn : $_GET, $_POST, $_SERVER
   */

  // Example 1 : $_SERVER
  // print_r($_SERVER);

  // Example 2 : $_GET (Demo: ?name=Cong&age=18)
  // print_r($_GET);

  // Not Good
  // if(isset($_GET['name'])) {
  //   echo $_GET['name'];
  // }

  // if(isset($_GET['age'])) {
  //   echo $_GET['age'];
  // }

  // Good better (use coalescing);
  // $name = $_GET['name']??'';
  // $age = $_GET['age']??'';
  // echo $name;
  // echo $age;

  // Example 3 : $_POST 
  // print_r($_POST);
  // $email = $_POST['email']??'';
  // $password = $_POST['password']??'';
  // echo $email;
  // echo $password;

  /**
   * Nếu viết như line31, line32 thì dễ bị tấn công bởi hacker 
   * nếu chúng nhập đoạn script gì đó vào , vì vậy cần sử dụng 
   * htmlspecialchars() hoặc filter_var để biến chúng thành 
   * string mới gửi thông tin lên server
   */

  $email = htmlspecialchars($_POST['email'])??'';
  // $email = filter_var(($_POST['email']), FILTER_SANITIZE_SPECIAL_CHARS);
  $password = htmlspecialchars($_POST['password'])??'';
  echo $email;
  echo $password;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- <h1>FORM METHOD GET</h1>
  <form 
    action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="GET"
  >
    <div>
      <label for="name">Your name:</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="age">Your age:</label>
      <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
  </form> -->

  <h1>FORM METHOD POST</h1>
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