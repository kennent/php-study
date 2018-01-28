<?php
require_once("./trait/HobiTool.php");
require_once("./trait/HanaTool.php");
class MyClass {
    use HobiTool, HanaTool {
        HobiTool::hello as hobiHello;
        HanaTool::hello as hanaHello;
        HanaTool::hello insteadof HobiTool;
    }
}