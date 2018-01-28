<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter2</title>
</head>
<body>
    <h1>php의 기본</h1>
    <?php
        echo "<h2>슈펴 전역 변수 목록</h2><hr>";
        echo "'$'GLOBALS : $GLOBALS<br>";
        echo "'$'_SERVER : $_SERVER<br>";
        echo "'$'_GET : $_GET<br>";
        echo "'$'_POST : $_POST<br>";
        echo "'$'_FILES : $_FILES<br>";
        echo "'$'_REQUEST : $_REQUEST<br>";
        echo "'$'_SESSION : $_SESSION<br>";
        echo "'$'_ENV : $_ENV<br>";
        echo "'$'_COOKIE : $_COOKIE<br>";
        echo "'$'php_errormsg : $php_errormsg<br>";
        echo "'$'HTTP_RAW_POST_DATA : $HTTP_RAW_POST_DATA<br>";
        echo "'$'http_response_header : $http_response_header<br>";
        echo "'$'argc : $argc<br>";
        echo "'$'argv : $argv<br>";
        echo "<h2>핵심 모듈 상수 목록</h2><hr>";
        echo "PHP_VERSION_ID : ", PHP_VERSION_ID, "<br>";
        echo "PHP_EOL : ", PHP_EOL, "<br>";
        echo "PHP_INT_MAX : ", PHP_INT_MAX, "<br>";
        echo "PHP_INT_MIN : ", PHP_INT_MIN, "<br>";
        echo "PHP_OS : ", PHP_OS, "<br>";
        echo "TRUE : ", TRUE, "<br>";
        echo "FALSE : ", FALSE, "<br>";
        echo "NULL : ", NULL, "<br>";
        echo "E_ERROR : ", E_ERROR, "<br>";
        echo "E_PARSE : ", E_PARSE, "<br>";
        echo "<h2>매직 상수 목록</h2><hr>";
        echo "__LINE__ : ", __LINE__, "<br>";
        echo "__FILE__ : ", __FILE__, "<br>";
        echo "__DIR__ : ", __DIR__, "<br>";
        echo "__FUNCTION__ : ", __FUNCTION__, "<br>";
        echo "__CLASS__ : ", __CLASS__, "<br>";
        echo "__TRAIT__ : ", __TRAIT__, "<br>";
        echo "__METHOD__ : ", __METHOD__, "<br>";        
        echo "__NAMESPACE__ : ", __NAMESPACE__, "<br>";
    ?>
</body>
</html>