<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>in_string_array</h1>
<?php
function stringCheck($searchNumber) {
    $data = ["케넹", "kennen"];
    $str = (string)$searchNumber;
    if(in_array($str, $data)) {
        echo "$str 있음<br>";
    } else {
        echo "$str 없음<br>";
    }
}
stringCheck(케넹);
stringCheck(케);
stringCheck(kennen);
stringCheck(kEnnEn);
?>
</body>
</html>