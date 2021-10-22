<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
      $dan = 1;
      for($dan; $dan <= 9; $dan++){
        for($i=1; $i<=9; $i++){
          echo $i."x".$dan."=".$i*$dan."&nbsp&nbsp";
          //&nbsp는 스페이스바 한칸으로 ""로 감싸줘야함

        }
        print("\n");
      }


       ?>
  </body>
</html>
