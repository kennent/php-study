<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_diff()</h1>
<?php
$original = [1, 2, 3, 4, 5];
$list1 = [1];
$list2 = [2, 4];
$list3 = [1, 5];
$diffList = array_diff($original, $list1, $list2, $list3);
echo "남은거 : ";
print_r($diffList);
?>
</body>
</html>