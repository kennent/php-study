<?php
require_once("./interface/WorldRule");
class InterClass implements WorldRule {
    function hello() {
        echo "안녕하세요!<br>";
    }
    function thanks() {
        echo "감사합니다!<br>";
    }
}