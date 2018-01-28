<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_slice_trueOption</h1>
<pre>
<?php
$arr = ['a', 'b', 'c', 'd', 'e', 'f'];
$slice = array_slice($arr, 1, 3, true);
print_r($slice);
?>
</pre>
</body>
</html>