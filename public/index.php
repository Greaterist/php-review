<?php
session_start();


use app\engine\Autoload;
use app\models\{Goods, Users, Orders, Basket};
use app\engine\Db;
use app\engine\Render;
use app\engine\Request;
use app\engine\TwigRender;

include '../engine/Autoload.php';
include "../vendor/autoload.php";
include dirname(__DIR__) . '/config/config.php';




spl_autoload_register([new Autoload(), 'loadClass']);

$request = new Request();

$controllerName = $request->getControllerName() ?: 'goods';
$actionName = $request->getActionName();
$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";
if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
} else {
    echo "404 нет такого контроллера";
}
