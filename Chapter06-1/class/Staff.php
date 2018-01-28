<?php
class Staff {
    public static $piggyBank = 0;
    public static function deposit(int $won) {
        self::$piggyBank += $won;
    }
    public $name;
    public $age;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function hello() {
        if (is_null($this->name)) echo "안녕하세요!<br>";
        else echo "안녕하세요, {$this->name}입니다!<br>";
    }
    public function latePenalty() {
        self::deposit(1000);
    }
}