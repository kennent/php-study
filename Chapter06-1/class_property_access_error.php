<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>class_property_access_error</h1>
<?php
class Cook {
    public $price;
    public function made() {
        $price = 1000;
        echo "음식을 조리했습니다! 가격은 {$price}원입니다!";
    }
}
$cook = new Cook();
$cook->price = 500;
$cook->made();
?>
</body>
</html>