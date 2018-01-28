<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_map2</h1>
<ul>
<?php
$point = ["10km", "20km", "30km", "40km", "50km"];
$split = ["00:50:37", "01:50:37","02:40:37","03:20:37","03:50:37"];
array_map(function($value1, $value2) {
    echo "<li>", $value1, " -- ", $value2, "</li>";
}, $point, $split);
?>
</ul>
</body>
</html>