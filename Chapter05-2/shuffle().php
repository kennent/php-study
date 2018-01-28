<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>shuffle()</h1>
<?php
$country = ["Korea" => "won", "Japan" => "en", "USA" => "dollar", "Europe" => "euro"];
shuffle($country);
print_r($country);
?>
</body>
</html>