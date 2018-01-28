<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter8</title>
    <style>ul { list-style: none; } input { margin: 5px 0; }</style>
</head>
<body>
<h1>GET_encode</h1>
<div>
<?php
$data = "서울";
$data = rawurlencode($data);
$url = "index.php";
echo "<a href={$url}?data={$data}>", "송신한다", "</a>";
?>
</div>
</body>
</html>