<?php
    require_once("lib/util.php");
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="utf-8">
    <title>Chapter10</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
    if (isSet($_COOKIE["gamedata"])) {
        $dataQueryString = $_COOKIE["gamedata"];
        parse_str($dataQueryString, $gamedata);
        $gamedata = es($gamedata);
        foreach ($gamedata as $key => $value) {
            echo "{$key} : {$value}<br>";
        }
        echo "<hr>";
    } else echo "쿠키는 없습니다<hr>";
?>
    <a href="ASS_set_cookie.php">돌아가기</a>
</div>
</body>
</html>