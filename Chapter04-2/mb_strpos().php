<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>mb_strpos()</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
function search($target, $searchStr) {
    $result = mb_strpos($target, $searchStr);
    if ($result === false) {
        echo "[{$searchStr}]은 [{$target}]에 포함되어 있지 않습니다"."<br>";
    } else {
        echo "[{$searchStr}]은 [{$target}]의 {$result}번째에 문자가 있습니다"."<br>";
    }
}
search('league of legends', 'of');
search('offsetoff', 'of');
search('OffsetoFf', 'of');
search('fate/grand order', 'of');
search('안녕하세요', '녕하');
?>
</body>
</html>