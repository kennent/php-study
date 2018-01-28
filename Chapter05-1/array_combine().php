<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_combine</h1>
<pre>
<?php
$arrA = ['10km', '20km', '30km'];
$arrB = ['00:59:43', '01:31:49', '02:55:21'];
$result = array_combine($arrA, $arrB);
var_dump($result);
?>
</pre>
</body>
</html>