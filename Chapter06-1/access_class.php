<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>access_class</h1>
<?php
require_once("class/Access.php");
$obj = new Access("케넹");
// echo $obj->name, "<br>"; <- 오류 발생함
echo $obj->getName();
?>
</body>
</html>