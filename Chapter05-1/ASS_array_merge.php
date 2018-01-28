<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>ASS_array_merge</h1>
<pre>
<?php
$arrA = ['a' => 1, 'b' => 2, 'c' => 3];
$arrB = ['b' => 40, 'd' => 50];
$result = array_merge($arrA, $arrB);
var_dump($result);
?>
</pre>
</body>
</html>