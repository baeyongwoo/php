<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic(){
        print("Lorem ipsum dolor sit amet1<br>");
        print("Lorem ipsum dolor sit amet2");
      }

      basic();
     ?>
     <h2>parameter &amp; argument</h2>
     <?php
     function sum($num1, $num2){
       print($num1 + $num2);
       print("<br>");
     }

     sum(2, 4);
      ?>
      <h2>return</h2>
      <?php

      function sum2($num1, $num2){
        return $num1 + $num2;
      }
      print(sum2(2,4));
      // 파일 생성
      file_put_contents('result.txt', sum2(2,4));
       ?>
  </body>
</html>
