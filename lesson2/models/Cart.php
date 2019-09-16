<?php


namespace app\models;


class Basket extends Model
{
    public $id;
    public $products = [];// массив с объектами Product

    public function getTableName()
    {
        return 'basket';
    }
}