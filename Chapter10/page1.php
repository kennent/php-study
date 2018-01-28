<?php
    require_once("lib/util.php");
    if (isSet($_COOKIE["visitedCount"])) $visitedCount = $_COOKIE["visitedCount"];
    else $visitedCount = 0;
    $result = setcookie("visitedCount", ++$visitedCount, time() + 60*5);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chapter10</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
    if ($result) {
        echo "이 페이지의 방문은 ", es($visitedCount), " 번째입니다<hr>";
        echo '<a href="page2.html">페이지를 이동합니다</a><br>';
        echo '(<a href="reset_counter.php">초기화합니다</a>)';
    } else echo '<span class="error">쿠키를 사용할 수 없습니다</span>';
?>
</div>
</body>
</html>