<?php

namespace app\controllers;

use app\engine\Render;
use app\models\Goods;
use app\models\Users;

class GoodsController extends Controller
{

    public function actionCatalog()
    {


        $page = $_GET['page'] ?? 0;
        $catalog = Goods::getAll();
        echo $this->render('goods/catalog', [
            'catalog' => $catalog,
            'page' => ++$page
        ]);
    }

    public function actionCard()
    {
        $id = $_GET['id'];

        $goods = Goods::getOne($id);
        echo $this->render('goods/card', [
            'goods' => $goods
        ]);
    }
}
