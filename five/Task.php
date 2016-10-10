<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/10/10
 * Time: 12:05
 */
namespace Tasks;

class Task {
    public $name;
    function doSpeak(){
        print "hello \n";
    }
    function sayHi(){
        echo 'hi';
    }
}




namespace T;

$m = new \Tasks\Task();
$m->doSpeak();

var_dump(get_class_methods($m));
