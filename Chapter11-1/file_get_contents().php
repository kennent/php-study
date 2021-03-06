<?php
require_once("lib/util.php");
$date = date("Y/n/j G:i:s", time_kr());
$writedata = <<< "EOD"
히어 다큐먼트라면 중간에 개행하거나
변수를 사용한 문장을 만들 수 있습니다
갱신일 : $date
EOD;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chapter11</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
$filename = "mytext.txt";
$result = file_exists($filename);
if ($result) {
    $readdata = file_get_contents($filename);
    $readdata = es($readdata);
    $readdata_br = nl2br($readdata, false);
    echo "file_get_contents를 사용해<br>";
    echo "{$filename}을 읽었습니다<hr>";
    echo $readdata_br, "<hr>";
    echo '<a href="file_put_contents().php">파일을 읽는다</a>';
} else echo '<span class="error">파일에 읽을 수 없습니다</span>';
?>
</div>
</body>
</html>