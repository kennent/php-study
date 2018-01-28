<?php
    require_once("lib/util.php");
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <title>Chapter11</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
    $filename = "memo.txt";
    try {
        $fileObj = new SplFileObject($filename, "rb");
    } catch (Exception $e) {
        echo '<span class="error">오류가 있습니다</span><br>';
        echo $e->getMessage();
        exit();
    }
    $fileObj->flock(LOCK_SH);
    $data = new LimitIterator($fileObj, 0, 5);
    foreach ($data as $key => $value) {
        echo sprintf("%02d: %s\n", $key+1, es($value)), "<br>";
    }
    $fileObj->flock(LOCK_UN);
    echo "<hr>", '<a href="input_txt.html">텍스트 입력 페이지로</a>';
?>
</div>
</body>
</html>
