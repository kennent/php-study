<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>preg_replace()</h1>
<?php
$data = array();
$data[] = ["name" => "케넹", "age" => 17, "phone" => "010-3456-9123"];
$data[] = ["name" => "hai_per", "age" => 17, "phone" => "010-1234-6789"];
$data[] = ["name" => "mannal2", "age" => 17, "phone" => "010-3579-4201"];
$data[] = ["name" => "snuf(아재)", "age" => 9999, "phone" => "010-7654-7890"];
$pattern = "/(-)\d{4}$/";
$replacement = "$1****";
foreach ($data as $user) {
    $result = preg_replace($pattern, $replacement, $user);
    foreach ($result as $key => $value) {
        echo "{$key} : ", $value, "<br>";
    }
}
?>
</body>
</html>