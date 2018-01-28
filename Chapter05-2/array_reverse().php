<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_reverse()</h1>
<?php
$country = ["Korea" => "won", "Japan" => "en", "USA" => "dollar", "Europe" => "euro"];
$number = [1, 2, 3, 4, 5, 6];
echo "배열 false : ";
print_r(array_reverse($number));
echo "<br>배열 true : ";
print_r(array_reverse($number, true));
echo "<br>연관 배열 false : ";
print_r(array_reverse($country));
echo "<br>연관 배열 true : ";
print_r(array_reverse($country, true));
?>
</body>
</html>