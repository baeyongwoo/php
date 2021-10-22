<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    //배열 선언
    // $변수명 = array(담을 것들);
    $coworkers =  array('byw', 'kim','java', 'php');

    //출력 $배열명[인덱스번호];
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';

    $add ='hong';
    function insert_array($coworkers, $idx, $add){
      $coworkers_front = array_slice($coworkers, 0, $idx); //처음부터 해당 인덱스까지 자름
      $coworkers_end=array_slice($coworkers, $idx); //해당인덱스부터 마지막까지 자름
      $coworkers_front[] = $add; //새 값 추가
      return array_merge($coworkers_front, $coworkers_end);
    }

    $coworkers = insert_array($coworkers, 1, $add);

    print_r($coworkers);
     ?>

     <?php
$arr = array("AAA", "BBB", "CCC", "DDD","EEE", "FFF");  //arr 배열변수 선언
$add = "ZZZ"; //삽입할 문자열
function insert_arrays($arr, $idx, $add){ //매개변수로 배열명, 삽입할 위치, 삽입할 문자열
	$arr_front = array_slice($arr, 0, $idx); //처음부터 해당 인덱스까지 자름 (배열명, 처음위치, 해당 인덱스)
	$arr_end = array_slice($arr, $idx); //해당인덱스 부터 마지막까지 자름
	$arr_front[] = $add;//새 값 추가
	return array_merge($arr_front, $arr_end);  // 배열 합치기
}

$arr = insert_arrays($arr, 1, $add);



print_r($arr);

?>
  </body>
</html>
