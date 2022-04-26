<?php

namespace app\models;

class Goods extends DBModel
{
    public $id;
    public $name;
    public $filename;
    public $description;
    public $price;

    protected $props = [
        'name' => false,
        'filename' => false,
        'description' => false,
        'price' => false,
    ];

    public function __construct($name = null, $filename = null, $description = null, $price = null)
    {
        $this->name = $name;
        $this->filename = $filename;
        $this->description = $description;
        $this->price = $price;
    }

    public static function getTableName()
    {
        return 'goods';
    }
}
