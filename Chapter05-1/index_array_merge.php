<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>index_array_merge</h1>
<pre>
<?php
$arrA = ['a', 'b', 'c'];
$arrB = ['d', 'e', 'f', 'g', 'h'];
$arrC = ['i'];
$result = array_merge($arrA, $arrB, $arrC);
var_dump($result);
?>
</pre>
</body>
</html>