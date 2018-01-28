<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>ASS_array_sort</h1>
<?php
$goods = ["AX-T" => 180000, "FX-A" => 150000, "KI-M" => 360000];
asort($goods);
echo "asort() 후 \$goods : ";
print_r($goods);
arsort($goods);
echo "<br>arsort() 후 \$goods : ";
print_r($goods);
sort($goods);
echo "<br>sort() 후 \$goods : ";
print_r($goods);
?>
</body>
</html>