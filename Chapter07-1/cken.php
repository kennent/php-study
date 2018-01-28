<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter8</title>
    <style>ul { list-style: none; } input { margin: 5px 0; }</style>
</head>
<body>
<?php
function cken(array $data) {
    $result = true;
    foreach ($data as $key => $value) {
        if(is_array($value)) {
            $value = implode("", $value);
        }
        if (!mb_check_encoding($value, "UTF-8")) {
            $result = false;
            break;
        }
    }
    return $result;
}
?>
</body>
</html>