<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>parent_construct</h1>
<?php
require_once("class/Runner.php");
$runner1 = new Runner("우사인볼트", 30);
print_r($runner1);
?>
</body>
</html>