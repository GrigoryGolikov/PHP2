<?php

namespace app\controllers;

use app\models\User;

class UserController extends Controller
{

    public function actionAll() {

        $users = User::getAll();
        echo $this->render('users', ['users' => $users]);
    }

    public function actionUser() {
        $id = $_GET['id'];
        $user = User::getOne($id);
        echo $this->render('user', ['user' => $user]);
    }



}