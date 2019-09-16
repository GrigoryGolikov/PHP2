<?php


namespace app\models;


class Cart extends Model
{
    public $id;
    public $id_product;
    public $id_session;
    public $quantity;
    public $price;

    public function getTableName(){

        return 'cart';

    }

    public function cartSum(){

        return 'cart sum';

    }

    public function addProduct($id_product, $quantity = 1){

        return 'add ok';

    }

    public function removeProduct($id_product, $quantity = 1){

        return 'remove ok';

    }

}