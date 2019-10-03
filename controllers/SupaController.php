<?php

namespace app\controllers;

use app\models\Server;

class SupaController extends \yii\web\Controller
{
    public function actionIndex()
    {

        //print_r(Server::getCat());
        // print_r(Server::getItem('2'));
        print_r(Server::getItemBez('2'));
        return $this->render('index');
    }

}
