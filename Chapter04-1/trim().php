<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>trim()</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
echo "f".trim($str)."k<br>";
echo "f".ltrim($str)."k<br>";
echo "f".rtrim($str)."k<br>";
?>
</body>
</html>