<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>inheritance</h1>
<ul>
<?php
require_once("class/Soccer.php");
$player1 = new Soccer("meshi");
$player1->who();
$player1->play();
$player2 = new Soccer("honaldo");
echo "{$player2}";
?>
</ul>
</body>
</html>