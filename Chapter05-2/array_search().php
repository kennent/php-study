<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_search()</h1>
<?php
$list = [1, 2, 3, 4, 5];
$ass = ["a" => 1, "b" => 2, "c" => 4];
$listN = array_search(4, $list);
$assN = array_search(4, $ass);
echo "list : $listN | ass : $assN";
?>
</body>
</html>