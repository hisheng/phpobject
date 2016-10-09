<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/10/9
 * Time: 11:37
 */

class ShopProduct {
    public $title = 'defaut product';
    public $producerMainName = 'main name';
    public $producerFirstName = 'first name';
    public $price = 0;

    function __construct($title,$firstName,$mainName,$price){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    function getProducer(){
        return $this->producerFirstName." "."{$this->producerMainName}";
    }
}

$product1 = new ShopProduct('my anta','wikk','cather',5.9);
$product2 = new ShopProduct('my anta','wikk','cather',5.9);

var_dump($product1);
var_dump($product2);

var_dump($product1->title);

$product1->title = 'product1 title';

var_dump($product1->title);


// 可以动态的增加属性
$product1->newname = 'new name ja';
var_dump($product1->newname);

var_dump($product1->getProducer());
