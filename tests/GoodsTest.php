<?php

use app\models\Goods;

class GoodsTest extends \PHPUnit\Framework\TestCase
{
    public function testGoodsConstructor(){
        $name = "item";
        $filename = "item.img";
        $description = "description";
        $price = "1111";
        $goods = new Goods($name, $filename, $description, $price);
        $this->assertEquals($name, $goods->name);
        $this->assertEquals($filename, $goods->filename);
        $this->assertEquals($description, $goods->description);
        $this->assertEquals($price, $goods->price);
    }

    public function testGoodsConstructorEmpty(){
        $goods = new Goods();
        $this->assertEquals(null, $goods->name);
        $this->assertEquals(null, $goods->filename);
        $this->assertEquals(null, $goods->description);
        $this->assertEquals(null, $goods->price);
    }

    public function testGoodsTableName(){
        $goods = new Goods();
        $tableName = "goods";
        $this->assertEquals($tableName, $goods->getTableName());
    }

    public function testGoodsProps(){
        $goods = new Goods();
        $this->assertEquals(false, $goods->props['name']);
        $this->assertEquals(false, $goods->props['filename']);
        $this->assertEquals(false, $goods->props['description']);
        $this->assertEquals(false, $goods->props['price']);
    }



}