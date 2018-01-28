<?php
trait HobiTool {
    function hello() {
        echo "헬로! ";
    }
    function weekday() {
        $week = ["월", "화", "수", "목", "금", "토", "일"];
        $now = new DateTime();
        $w = (int)$now->format('w');
        $weekday = $week[$w];
        echo "오늘은 $weekday", "요일입니다";
    }
}