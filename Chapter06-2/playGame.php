<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>playGame</h1>
<?php
require_once("class/Game.php");
$player = new Game();
for ($i = 0;$i < 10;$i++) {
    $player->play();
    if (!$player->isAlive()) {
        break;
    }
}
echo "게임 종료<br>";
?>
</body>
</html>