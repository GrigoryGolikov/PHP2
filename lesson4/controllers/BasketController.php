<?php

namespace app\controllers;

use app\models\Basket;

class BasketController extends Controller
{

    public function actionAll() {

        $basket = Basket::getAll();
        echo $this->render('basket', ['basket' => $basket]);
    }

   /* public function actionItem() {
        $id = $_GET['id'];
        $product = Basket::getOne($id);
        echo $this->render('card', ['product' => $product]);
    }*/



}