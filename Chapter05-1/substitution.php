<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_splice</h1>
<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
$replace = ['X', 'Y', 'Z'];
$removed = array_splice($arr, 1, 3, $replace);
echo "\$arr : ";
var_dump($arr);
echo "<br>\$removed : ";
var_dump($removed);
?>
</body>
</html>