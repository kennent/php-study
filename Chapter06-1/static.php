<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>static</h1>
<?php
require_once("class/Staff.php");
Staff::deposit(100);
Staff::deposit(150);

echo Staff::$piggyBank, "원이 되었습니다<br>";
$kennen = new Staff("케넹", 18);
$kennen->latePenalty();
echo Staff::$piggyBank, "원이 되었습니다<br>";
?>
</body>
</html>