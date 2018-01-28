<?php
    $result = setcookie("visitedCount", 0, time() - 60);
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
        echo "방문 횟수를 초기화했습니다<hr>";
        echo '<a href="page1.php">page 1로 돌아가기</a>';
    } else echo '<span class="error">쿠키 삭제에 오류가 발생했습니다</span><br>';
?>
</div>
</body>
</html>