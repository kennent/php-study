<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_slice</h1>
<pre>
<?php
$arr = ['a', 'b', 'c', 'd', 'e', 'f'];
$slice1 = array_slice($arr, 1, 3);
$slice2= array_slice($arr, -3);
print_r($slice1);
print_r($slice2);
?>
</pre>
</body>
</html>