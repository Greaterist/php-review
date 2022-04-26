<?php

namespace app\controllers;

use app\engine\Render;
use app\engine\TwigRender;
use app\interfaces\IRenderer;
use app\models\Basket;
use app\models\Users;

abstract class Controller
{
    private $action;
    private $defaltAction = 'index';
    private $render;

    public function __construct(IRenderer $render)
    {
        $this->render = $render;
    }

    public function runAction($action)
    {
        $this->action = $action ?: $this->defaltAction;
        $method = 'action' . ucfirst($this->action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo "404";
        }
    }

    public function actionIndex()
    {
        echo $this->render('index');
    }

    public function render($template, $params = [])
    {
        return $this->renderTemplate('layouts/main', [
            'menu' => $this->renderTemplate('menu', [
                'userName' => Users::getName(),
                'isAuth' => Users::isAuth(),
                'count' => Basket::getCountWhere('session_id', session_id())
            ]),
            'content' => $this->renderTemplate($template, $params),

        ]);
    }

    public function renderTemplate($template, $params = [])
    {
    
        return $this->render->renderTemplate($template, $params);
    }
}
