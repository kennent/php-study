<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>search_substitution</h1>
<?php
function numberMask($subject) {
    $pattern = "/^\d{4}\s?(\d{4}\s?){2}\d{2}(\d{2})$/";
    $replacement = "**** **** **** **$2";
    $result = preg_replace($pattern, $replacement, $subject);
    if (is_null($result)) {
        return "오류 : ".preg_last_error();
    } else if ($result == $subject) {
        return "카드 번호가 아닙니다";
    } else {
        return $result;
    }
}

$number1 = "1234 5678 9012 3456";
$number2 = "6543210987654321";
$num1 = numberMask($number1);
$num2 = numberMask($number2);
echo "{$number1} => {$num1}"."<br>";
echo "{$number2} => {$num2}";
?>
</body>
</html>