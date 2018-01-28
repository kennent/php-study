<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
<h1>변수의 값 전달</h1>
<?php
function Up($var) {
    $var++;
}
$num = 5;
Up($num);
echo "{$num}";
?>
</body>
</html>