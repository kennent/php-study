<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>overlap</h1>
<?php
require_once("class/MyClass.php");
$myObj = new MyClass();
$myObj->hello();
echo "<br>";
$myObj->weekday();
?>
</body>
</html>