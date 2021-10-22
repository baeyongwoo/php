<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>function</h1>
    <?php
      $str = "Lorem ipsum dolor sit amet,
       consectetur adipisicing elit,
       sed do eiusmod tempor incididunt
      ut labore et dolore magna aliqua.\n";
       // nl2br은 코드상에 개행처럼 웹에서 표현할 때 개행처리 자동으로 해줌
      echo nl2br($str);

      echo "문자열의 총 길이 ". strlen($str);
     ?>
  </body>
</html>
