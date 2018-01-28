<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>dilimeter</h1>
<form action="" method="get">
    검색 대상 문자열 : <input type="text" name="str" style="width:500px"><br>
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
var_dump(preg_match("/\/image\//", $str));
var_dump(preg_match("#/image/#", $str));
?>
</body>
</html>