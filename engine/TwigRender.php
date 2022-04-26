<?php

namespace app\engine;

use app\interfaces\IRenderer;
use app\traits\TSingletone;

class TwigRender implements IRenderer
{

    private $twig = null;

    use TSingletone;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $this->twig = new \Twig\Environment($loader);
    }

    

    public function renderTemplate($template, $params = [])
    {
        $templatePath =  $template . '.twig';
        return $this->twig->render($templatePath, $params);
    }
}
