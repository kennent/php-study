<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
<h1>익명 함수</h1>
<?php
$msg = "너무 귀여워요!";
$f = function ($who) use ($msg) {
    echo "{$who}씨, ".$msg;
};
$msg = "얼른 자세요!";
$f("케넹");
?>
</body>
</html>