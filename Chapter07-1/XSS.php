<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter8</title>
    <style>ul { list-style: none; } input { margin: 5px 0; }</style>
</head>
<body>
<h1>XSS</h1>
<div>
<?php
$data = $_GET["data"];
$data = rawurldecode($data);
$data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
echo "[{$data}]를 받았습니다";
?>
</div>
</body>
</html>