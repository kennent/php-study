<?php 
require_once("lib/util.php");
session_start();
?>
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
    if (isSet($_SESSION["coupon"])) {
        $coupon = $_SESSION["coupon"];
        $couponList = ["AVS123", "XYZ999"];
        if (in_array($coupon, $couponList)) {
            echo es($coupon), "는 사용할 수 있는 쿠폰 코드입니다";
        } else {
            echo es($coupon), "는 사용할 수 없는 쿠폰 코드입니다";
        }
    } else {
        echo "세션 오류입니다";
    }
?>
</div>
</body>
</html>