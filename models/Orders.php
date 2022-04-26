<?php

namespace app\models;

use app\engine\Db;

class Orders extends DBModel
{

    protected $id;
    protected $order_session;
    protected $login;
    protected $email;

    protected $props = [
        'order_session' => false,
        'login' => false,
        'email' => false
    ];

    function __construct($order_session = null, $login = null, $email = null)
    {
        $this->order_session = $order_session;
        $this->login = $login;
        $this->email = $email;
    }

    public static function getOrders($session_id)
    {
        $orders = Orders::getWhere('order_session', $session_id);
        return $orders;
    }

    public static function getTableName()
    {
        return 'orders';
    }
}
