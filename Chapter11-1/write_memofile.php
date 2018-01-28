<?php
require_once("lib/util.php");
if (empty($_POST["memo"])) {
    $url = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
    header("Location:".$url."/input_memo.html");
    exit();
}
$memo = $_POST['memo'];
$date = date("Y/n/j G:i:s", time_kr());
$writedata = "---\n".$date."\n".$memo."\n";
$filename = "memo.txt";
try {
    $fileObj = new SplFileObject($filename, "a+b");
} catch (Exception $e) {
    echo '<span class="error">오류가 발생했습니다</span><br>';
    echo $e->getMessage();
    exit();
}
$fileObj->flock(LOCK_EX);
$result = $fileObj->fwrite($writedata);
$fileObj->flock(LOCK_UN);
$url = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
header("Location:".$url."/read_memofile.php");
exit();