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
try {
    $fileObj = new SplFileObject($filename, "wb");
}
catch (Exception $e) {
    echo '<span class="error">오류가 발생했습니다</span><br>';
    echo $e->getMessage();
    exit();
}
$written = $fileObj->fwrite($writedata);
if ($written == FALSE) echo '<span class="error">오류가 발생했습니다</span>';
else {
    echo "SplFileObject의 fwrite를 사용해<br>";
    echo "{$filename}에 {$written}바이트를 썼습니다<hr>";
    echo '<a href="read_file.php">파일을 읽는다</a>';
}
?>
</div>
</body>
</html>