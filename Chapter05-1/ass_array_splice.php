<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>ass_array_splice</h1>
<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$removed = array_splice($arr, 3, count($arr) - 3);
echo "삭제된 연관 배열 : ";
var_dump($arr);
echo "<br>삭제한 요소가 들어있는 연관 배열 : ";
var_dump($removed);
?>
</body>
</html>