<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>알파벳 순으로 비교하기</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
function compare($a, $b) {
    if ( $a < $b ) {
        echo "$a $b 순"."<br>";
    } else if ($a == $b) {
        echo "$a == $b"."<br>";
    } else {
        echo "$b $a 순"."<br>";
    }
}
compare('application', 'application');
compare('app', 'application');
compare('application', 'app');
compare('Application', 'application');
compare('Application', 'WebApplication');
?>
</body>
</html>