<?php

namespace app\models;

use app\engine\Db;

class Basket extends DBModel
{
    protected $id;
    protected $session_id;
    protected $goods_id;

    protected $props = [
        'session_id' => false,
        'goods_id' => false
    ];

    public function __construct($session_id = null, $goods_id = null)
    {
        $this->session_id = $session_id;
        $this->goods_id = $goods_id;
    }



    public static function getBasket($session_id) {
        $sql = "SELECT basket.id as basket_id, goods.id prod_id, goods.name, goods.description, goods.price FROM `basket`,`goods` WHERE `session_id` = :session_id AND basket.goods_id = goods.id";

        return Db::getInstance()->queryAll($sql, ['session_id' => $session_id]);
    }

    public static function getTableName()
    {
        return 'basket';
    }
}