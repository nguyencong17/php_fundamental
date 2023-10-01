<?php
  // TOPIC : CONDITIONALS (CÂU LỆNH ĐIỀU KIỆN)  
  /**
   * Summary : 
   * If, then else if, else, ...
   * Switch..case..default
   */

  // Way 1 : if-else
  // $age = 30 ;
  // if($age > 18) {
  //   echo "You are greater than or equal to 18 years old<br>";
  // } else {
  //   echo "You are so young<br>";
  // }

  // $hours = date("H");
  // echo $hours;
  // if($hours < 12) {
  //   echo "Good morning";
  // } else if($hours >=12 && $hours <=17) {
  //   echo "Good afternoon";
  // } else {
  //   echo "Good evening";
  // }

  // Way 2 : Ternary operator
  // $comments = ['Good', 'I like you', 'How are you'];

  // Not Good
  // if(!empty($comments)) {
  //   echo "There are some comments";
  // } else {
  //   echo "No comments";
  // }

  // Good (Ternary operator)
  // echo !empty($comments) ? "There are some comments" : "No comments";

  // Way 3 : Coalescing operator
  // $first_comment = $comments[0] ?? 'No comments';
  // echo $first_comment;

  // Way 4 : Switch-case
  // $favorite_colors = 'aqua';
  // switch ($favorite_colors) {
  //   case 'red':
  //     echo "your choose RED";
  //     break;
  //   case 'green':
  //     echo "your choose GREEN";
  //     break;
  //   case 'blue':
  //     echo "your choose BLUE";
  //     break;
  //   default:
  //     echo "Not choose RED, GREEN, BLUE";
  // }
?>