<?php
    $message = "hello";
    $result = setcookie("message", $message);
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
        echo "쿠키를 저장했습니다<hr>";
        echo '<a href="check_cookie.php">쿠키를 확인하는 페이지로</a>';
    } else echo '<span class="error">쿠키 저장에 오류가 발생했습니다</span><br>';
?>
</div>
</body>
</html>