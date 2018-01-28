<?php
require_once("Player.php");
class Runner extends Player {
    public $age;
    function __construct($name, $age) {
        parent::__construct($name);
        $this->age = $age;
    }
    function who() {
        echo "{$this->name}, {$this->age}세입니다<br>";
    }
    function play() {
        echo "{$this->name}가 뛴다!<br>";
    }
}