<?php
class Player {
    public $name;
    function __construct($name = '이름없음') {
        $this->name = $name;
    }
    function __toString() {
        return $this->name;
    }
    function who() {
        echo "{$this->name}입니다<br>";
    }
}