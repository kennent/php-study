<?php
    $result1 = setcookie("visitedLog[counter]", "", time() - 3600);
    $result2 = setcookie("visitedLog[time]", "", time() - 3600);
    $result = ($result1 && $result2);
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
        echo "방문 로그의 쿠키를 파기했습니다<hr>";
        echo '<a href="page1_arr.php">page 1로 돌아가기</a>';
    } else echo '<span class="error">쿠키 삭제에 오류가 발생했습니다</span><br>';
?>
</div>
</body>
</html>