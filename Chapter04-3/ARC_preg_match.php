<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>ARC_preg_match.php</h1>
<?php
$result1 = preg_match("/4[6-9]-49/u", "49-46");
$result2 = preg_match("/4[6-9]-49/u", "46-49");
$result3 = preg_match("/4[6-9]-49/u", "41-49");
var_dump($result1);
var_dump($result2);
var_dump($result3);
?>
</body>
</html>