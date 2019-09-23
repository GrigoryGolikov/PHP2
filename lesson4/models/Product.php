<?php

namespace app\models;

class Product extends DbModel
{
    private $id;
    private $name;
    private $description;
    private $price;

    public function __set($name, $value)
    {
        $this->name = $value;
        $this->state['name'] = true;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public $state = [
        'name' => false,
        'description' => false,
        'price' => false,
    ];
    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $price
     */
    public function __construct($name = null, $description = null, $price = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }


    public static function getTableName()
    {
        return 'products';
    }




}