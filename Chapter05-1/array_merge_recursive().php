<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_merge_recursive</h1>
<pre>
<?php
$arrA = ['a' => 1, 'b' => 2, 'c' => 3];
$arrB = ['b' => 40, 'd' => 50];
$result = array_merge_recursive($arrA, $arrB);
var_dump($result);
?>
</pre>
</body>
</html>