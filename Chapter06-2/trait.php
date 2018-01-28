<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>trait</h1>
<?php
require_once("class/Milk.php");
$myMilk = new Milk();
echo "제조일자 : ", $myMilk->theDate;
echo "<br>";
echo "유통기한 : ", $myMilk->limitDate;
?>
</body>
</html>