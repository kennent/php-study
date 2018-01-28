<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter8</title>
    <style>ul { list-style: none; } input { margin: 5px 0; }</style>
</head>
<body>
<h1>es()</h1>
<div>
<?php
function es($data, $charset='UTF-8') {
    if (is_array($data)) {
        return array_map(__METHOD__, $data); # 재귀호출
    } else {
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}
?>
</div>
</body>
</html>