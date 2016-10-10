<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/10/9
 * Time: 16:34
 */

class StaticExample {
    public static $aNum = 0;
    public static function sayHello(){
        echo 'hello';
    }
}

var_dump(StaticExample::$aNum);
StaticExample::sayHello();