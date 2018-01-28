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
    $filename="poem.txt";
    try {
        $fileObj = new SplFileObject($filename, "rb");
    }
    catch (Exception $e) {
        echo '<span class="error">오류가 발생했습니다</span><br>';
        echo $e->getMessage();
        exit();
    }
    $fileObj->flock(LOCK_SH);
    $data = new LimitIterator($fileObj, 5, 10);
    echo "\$fileObj->seek(3) 결과 : <br>";
    echo $fileObj->seek(3);
    echo $fileObj->key(), " : ", $fileObj->current(), "<br><br>";
    echo "\$fileObj->next() 결과 : <br>";
    echo $fileObj->next();
    echo $fileObj->key(), " : ", $fileObj->current(), "<br><br>";
    echo "\$fileObj->rewind() 결과 : <br>";
    echo $fileObj->rewind();
    echo $fileObj->key(), " : ", $fileObj->current(), "<br><br>";
    echo "LimitIterator(5, 10) 결과 : <br>";
    foreach ($data as $key => $value) {
        echo sprintf("%02d : %s\n", $key, es($value)), "<br>";
    }
    $fileObj->flock(LOCK_UN);
?>
</div>
</body>
</html>