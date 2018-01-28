<?php
class Cook {
    public $name;
    public $price;
    public $m;
    function __construct($name, $price, $m) {
        $this->name = $name;
        $this->price = $price;
        $this->m = $m;
    }
    function made() {
        echo "{$this->name}을(를) 조리했습니다! 가격은 {$this->price}원입니다<br>";
        echo "조리하는데 걸린 시간은 {$this->m}분입니다<br>";
    }
}
// ?>