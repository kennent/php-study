<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>중괄호를 이용한 하나의 문자 출력</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
$strlen = strlen($str);
for ($i = 0;$i < $strlen;$i++) {
    $chr = $str{$i};
    echo $chr;
}
?>
</body>
</html>