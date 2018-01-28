<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>=== 연산자</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
function check($a, $b) {
    if ($a === $b) {
        echo "$a === $b"."<br>";
    } else {
        echo "$a !== $b"."<br>";
    }
}
check("7cm", "7nm");
check("21alphabet", "21alphabet");
check("3n", 3);
check("n3", 3);
check("숫자", 0);
?>
</body>
</html>