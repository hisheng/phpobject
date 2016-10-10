<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/10/10
 * Time: 10:35
 */

class Person {
    private  $_name;
    private  $_age;
    function __get($property){
        $method = "get{$property}";
        if(method_exists($this,$method)){
            return $this->$method();
        }
    }
    function __set($property,$value){
        $method = "set{$property}";
        if(method_exists($this,$method)){
            return $this->$method($value);
        }
    }

    function __toString(){
        return 'sss';
    }

    function getName(){
        return 'nob';
    }

    function setName($name){
        $this->_name = $name;
        if(is_null($name)){
            $this->_name = strtoupper($this->_name);
        }
    }

    function setAge($age){
        $this->_age = strtoupper($age);
    }

    function getAge(){
        return 44;
    }




}

$p = new Person();
print $p;


$p->name = 'ddd';
var_dump($p);



