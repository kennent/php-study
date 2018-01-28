<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_unique</h1>
<pre>
<?php
$arrA = ['red', 'blue', 'green'];
$arrB = ['red', 'pink', 'black'];
$arrC = ['red', 'blue', 'yellow'];
$result = array_unique(array_merge($arrA, $arrB, $arrC));
var_dump($result);
?>
</pre>
</body>
</html>