<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_filter()</h1>
<pre>
<?php
$arr = ['a' => 3, 'b' => 0, 'c' => 5, 'd' => -2, 'e' => 4];
$filtered = array_filter($arr, function($value) {
    return $value > 0;
});
print_r($filtered);
?>
</pre>
</body>
</html>