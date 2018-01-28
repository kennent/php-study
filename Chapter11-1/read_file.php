<?php
    require_once("lib/util.php");
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="utf-8">
    <title>Chapter11</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
    $filename="mytext.txt";
    try {
        $fileObj = new SplFileObject($filename, "rb");
    }
    catch (Exception $e) {
        echo '<span class="error">오류가 발생했습니다</span><br>';
        echo $e->getMessage();
        exit();
    }
    $readdata = $fileObj->fread($fileObj->getSize());
    if (!($readdata === FALSE)) {
        $readdata = es($readdata);
        $readdata_br = nl2br($readdata, false);
        echo "{$filename}을 읽었습니다<br>";
        echo $readdata_br, "<hr>";
        echo '<a href="write_file.php">파일에 쓰기</a>';
    } else echo '<span class="error">파일을 읽을 수 없습니다</span>';
?>
</div>
</body>
</html>