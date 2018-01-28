<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>strncmp()</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
function compare($a, $b) {
    $result = strncmp($a, $b, 3);
    if ( $result < 0 ) {
        echo "앞 세 글자만의 순서 : $a $b"."<br>";
    } else if (!$result) {
        echo "$a 와 $b 의 앞 세 글자는 같습니다"."<br>";
    } else {
        echo "앞 세 글자만의 순서 : $b $a"."<br>";
    }
}
compare('ABCa', 'ABCb');
compare('aBCa', 'ABCa');
?>
</body>
</html>