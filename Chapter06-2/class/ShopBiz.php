<?php
abstract class ShopBiz {
    abstract function thanks();
    protected $sales = 0;
    protected function sell($price) {
        if (is_numeric($price)) {
            echo "{$price}원입니다, ";
            $this->sales += $price;
        }
        $this->thanks();
    }
}