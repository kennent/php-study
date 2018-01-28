<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>class_require</h1>
<?php
require_once("class/Cook.php");
$cook = new Cook("새우", 5000, 30);
$cook->made();
</ul>
</body>
</html>