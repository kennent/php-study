<?php 
    require_once("lib/util.php");
    session_start();
    $errors = [];
?>
<?php
    if (!empty($_SESSION['name']) && !empty($_SESSION['words'])) {
        $name = $_SESSION['name'];
        $words = $_SESSION['words'];
    } else {
        $errors[] = "세션 오류입니다";
    }
    killSession();
?>
<?php
    function killSession() {
        $_SESSION = [];
        if (isSet($_COOKIE[session_name()])) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time()-36000, $params['path']);
        }
        session_destroy();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chapter10</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
    <?php if (count($error) > 0): ?>
        <span class="error"><?=implode('<br>', $errors); ?></span><br>
        <a href="input.html">첫 페이지로 돌아가기</a>
    <?php else: ?>
        <span>다음과 같이 받았습니다</span>
            <hr>
            <span>
                이름 : <?=es($name);?><br>
                좋아하는 단어 : <?=es($words);?><br>
                <a href="input.html">첫 페이지로 돌아가기</a>
            </span>
    <?php endif;?>
</div>
</body>
</html>