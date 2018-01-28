<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>strcmp()</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
function compare($a, $b) {
    $result = strcmp($a, $b);
    if ( $result < 0 ) {
        echo "$a $b 순"."<br>";
    } else if (!$result) {
        echo "$a == $b"."<br>";
    } else {
        echo "$b $a 순"."<br>";
    }
}
compare('A0', 0);
compare('A', 'a');
?>
</body>
</html>