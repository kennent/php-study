<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
<h1>가변 함수</h1>
<?php
function hello ($who) {
    echo "{$who}씨, 안녕하세요!<br>";
}
function bye ($who) {
    echo "{$who}씨, 잘 가요!<br>";
}
$msg = "bye";
if (function_exists($msg)) {
    $msg("케넹");
}
?>
</body>
</html>