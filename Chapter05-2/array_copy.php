<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_copy</h1>
<?php
$original = [0, 123, 412, 32, 64];
$copyArray = $original;
echo "copyArray : ";
print_r($copyArray);
sort($copyArray);
echo "<br>sort 후 copyArray : ";
print_r($copyArray);
rsort($copyArray);
echo "<br>rsotr 후 copyArray : ";
print_r($copyArray);
echo "<br>copyArray의 정렬을 모두 끝 마친 후의 original 배열 : ";
print_r($original);
?>
</body>
</html>