<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/10/9
 * Time: 16:45
 */

interface Chargeable {
    public function getPrice();
}


class ShopProduct implements Chargeable {
    public function __construct(){
        try{
            throw new Exception('iii',30);
        } catch(Exception $e) {
            echo "The exception code is: " . $e->getMessage();
        }
    }

    public function getPrice(){
        return $this->price;
    }

}

$a = new ShopProduct();