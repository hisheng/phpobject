<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/10/9
 * Time: 15:07
 */

class ShopProduct2 {


    private $title;
    private $producerMainName;
    private $producerFirstName;
    private $price;

    function __construct($title,$firstName,$mainName,$price){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;

    }



    function getProducer(){
        return $this->producerFirstName . $this->producerMainName ;
    }

    function getSummaryLine(){
        $base = "{$this->title} (  {$this->producerMainName } , ";
    }
}


class CDproduct  extends ShopProduct2{
    private $playLength;
    public function __construct($title,$firstName,$mainName,$price,$playLength){
        parent::__construct($title,$firstName,$mainName,$price);
        $this->playLength = $playLength;
    }

    function getPlayLength(){
        return $this->playLength;
    }

    public function getSummaryLine(){
        parent::getSummaryLine();
    }

}

class BookProduct extends ShopProduct2{
    private $numPages;

    public function __construct($title,$firstName,$mainName,$price,$numPages){
        parent::__construct($title,$firstName,$mainName,$price);
        $this->numPages = $numPages;
    }

    function getNumberOfPages(){
        return $this->numPages;
    }

    public function getSummaryLine(){
        parent::getSummaryLine();
    }






}