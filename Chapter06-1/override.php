<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>override</h1>
<?php
require_once("class/Runner.php");
$player1 = new Player("케넹");
$runner1 = new Runner("우사인볼트", 30);
$player1->who();
$runner1->who();
?>
</body>
</html>