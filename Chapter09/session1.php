<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chapter10</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
    $_SESSION["coupon"] = "AVS123";
?>
<a href="session2.php">다음 페이지로</a>
</div>
</body>
</html>