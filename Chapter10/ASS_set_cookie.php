<?php
    require_once("lib/util.php");
    $gamedata = ["name" => "케넹", "age" => "18", "avatar" => "Sol", "level" => "63"];
    $dataQueryString = arrayToQueryString($gamedata);
    $result = setcookie("gamedata", $dataQueryString, time() + 60*5);
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
    if ($result) {
        echo "게임 데이터를 저장했습니다<hr>";
        echo '<a href="ASS_check_cookie.php">쿠키 확인하기</a>';
    } else echo '<span class="error">쿠키를 사용할 수 없습니다</span><br>';
?>
</div>
</body>
</html>