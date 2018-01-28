<?php
require_once("./interface/GameBook.php");
class Game implements GameBook {
    public $hitPoint;
    function __construct($point = 50) {
        $this->newGame($point);
    }

    function newGame($point = 50) {
        $this->hitPoint = $point;
    }
    function play() {
        $num = random_int(0, 50);
        if($num % 2 == 0) {
            echo "{$num} 포인트가 증가했습니다!<br>";
            $this->hitPoint += $num;
        } else {
            echo "$num 포인트가 감소했습니다!<br>";
            $this->hitPoint -= $num;
        }
        echo "현재 $this->hitPoint 점<br>";
    }
    function isAilve():bool {
        return ($this->hitPoint > 0);
    }
}