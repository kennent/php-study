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
    $readdata = $fileObj->fread($fileObj->getSize());
    $fileObj->flock(LOCK_UN);
    if (!($readdata === FALSE)) {
        $readdata = es($readdata);
        $readdata_br = nl2br($readdata);
        echo "{$filename}을 읽었습니다<br>";
        echo $readdata_br, "<hr>";
        echo '<a href="input_memo.html">메모 입력 페이지로</a>';
    } else echo '<span class="error">파일을 읽을 수 없습니다</span>';
?>
</div>
</body>
</html>
