<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>in_array()</h1>
<?php
$data = [960, 970, 1050];
function check($searchNumber) {
    global $data;
    if(in_array($searchNumber, $data)) {
        echo "$searchNumber 있음<br>";
    } else {
        echo "$searchNumber 없음<br>";
    }
}
check(960);
check(1050);
check(980);
?>
</body>
</html>