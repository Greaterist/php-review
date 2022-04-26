<?php

namespace app\controllers;

use app\controllers\Controller;
use app\engine\Request;
use app\models\Basket;
use app\models\Orders;


class OrdersController extends Controller
{
    public function actionCheckout(){
        $session_id = session_id();
        $login = $_SESSION['login'];
        $email = (new Request())->getParams()['email'];


        $order = new Orders($session_id, $login, $email);
        $order->save();

        $email = (new Request())->getParams()['email'];
        $items = Basket::getWhere("session_id", $session_id);
        /*foreach($items as $elem){
            $order_items = new Basket($session_id, $id);
        $order_items->save();
        }*/

    }

    public function actionIndex()
    {
        $session_id = session_id();
        if (isset($_SESSION['login']) && $_SESSION['login'] == "admin"){
            $orders = Orders::getAll();
        }else{
            $orders = Orders::getWhere('order_session', $session_id);
        }
        
        
        echo $this->render('orders/list', [
            'orders' => $orders,
            'isAdmin' => true
        ]);
    }

    public function actionDetails(){
        $session = (new Request())->getParams()['session'];
        $details = Basket::getBasket($session);
        echo $this->render('orders/details', [
            'details' => $details,
            'isAdmin' => false
        ]);
    }
}
