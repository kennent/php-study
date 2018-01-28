<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_splice()</h1>
<?php
$arr = [1, 2, 3, 4, 5];
$removed = array_splice($arr, 2, 3);
echo "삭제된 배열 : ";
var_dump($arr);
echo "<br>삭제한 요소가 들어있는 배열 : ";
var_dump($removed);
?>
</body>
</html>