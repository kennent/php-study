<?php
    require_once("lib/util.php");
    $fruits = ["사과", "귤", "레몬", "바나나"];
    $valueString = implode("&", $fruits);
    $result = setcookie("fruits", $valueString);
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
        echo "좋아하는 과일을 저장했습니다<hr>";
        echo '<a href="index_check_cookie.php">쿠키 확인하기</a>';
    } else echo '<span class="error">쿠키 삭제에 오류가 발생했습니다</span><br>';
?>
</div>
</body>
</html>