<?php
require_once("ShopBiz.php");
class MyShop extends ShopBiz {
    // 접근 지정자를 표시하면 가독성에 좋습니다
    public function thanks() {
        echo "감사합니다!<br>";
    }
    public function selling($unitPrice, $quantity) {
        $price = $unitPrice * $quantity;
        $this->sell($price);
    }
    public function getSales() {
        echo "매출 합계는 {$this->sales}원입니다"."<br>";
    }
}