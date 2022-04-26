<?php

namespace app\models;

class Users extends DBModel
{
    public $id;
    public $login;
    public $hash;
    public $isAdmin;
    
    protected $props = [
        'login' => false,
        'pass' => false
    ];

    function __construct( $login = null, $hash = null, $isAdmin = null)
    {
        $this->login = $login;
        $this->hash = $hash;
        $this->isAdmin = $isAdmin;
    }

    public static function Auth($login, $pass)
    {
        $user = Users::getWhere('login', $login);
        if (password_verify($pass, $user->hash)) {
            $_SESSION['login'] = $login;

            return true;
        }
        return false;
    }
    
    public static function getName()
    {
        return $_SESSION['login'];
    }

    public static function isAuth()
    {
        return isset($_SESSION['login']);
    }

    public static function getTableName()
    {
        return 'users';
    }
}
