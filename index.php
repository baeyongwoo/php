<?php
  function print_list(){
    // data 디렉토리에 있는 파일의 목록을 가져오세요. php님
    // 파일의 목록을 하나 하나를
    // li와 a 태그를 이용해서 글 목록을 만드세요

    // scandir(폴더명);
    // scan하고자 하는 디렉터리를 $list라는 변수에 저장
    // 이때 리턴값은 배열
    $list = scandir('./data');
    $i = 0;
    while($i < count($list)){
      if($list[$i] != "." AND $list[$i] != ".."){
         echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
      $i++;
    }
  }
  function print_title(){
    if(isset($_GET['id'])){
      echo $_GET['id'];
    } else{
      echo "Welcome";
    }
  }

  function print_description(){
    // 파일 경로를 적어주면 그 파일을 찾아서 출력해준다.
    // file_get_contents("폴더명/".$_GET['id']) 폴더명을 이어붙이기 위해서 .사용하고, id를 가져와서 식별
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    } else{
      echo "Hello PHP";
    }
  }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title();
         ?>
    </title>
  </head>
  <body>

    <h1><a href="index.php">WEB</a></h1>
    <ol>
    <?php
      print_list();
     ?>
    </ol>
    <h1>
      <?php
      print_title();
       ?>
    </h1>
    <h2>
       <?php

       print_description();
        ?>
    </h2>
  </body>
</html>
