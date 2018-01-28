<?php
    require_once("lib/util.php");
    if (isSet($_COOKIE["visitedLog"])) {
        $logdata = $_COOKIE["visitedLog"];
        $counter = $logdata["counter"];
        $time = $logdata["time"];
        $lasttime = date("Y년n월j일 A g시i분", $time);
    } else {
        $counter = 0;
        $lasttime = "이번이 첫 방문";
    }
    $result1 = setcookie("visitedLog[counter]", ++$counter, time() + 60*60*24);
    $result2 = setcookie("visitedLog[time]", time(), time() + 60*60*24);
    $result = ($result1 && $result2);
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
        echo "이 페이지의 방문은 ", es($counter), " 번째입니다<hr>";
        echo "이전 방문 : ", es($lasttime), "<hr>";
        echo '<a href="page2_arr.html">페이지를 이동합니다</a><br>';
        echo '(<a href="reset_log.php">초기화합니다</a>)';
    } else echo '<span class="error">쿠키를 사용할 수 없습니다</span>';
?>
</div>
</body>
</html>