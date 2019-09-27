<?php

namespace app\controllers;

use yii\web\Controller;

class DemoController extends Controller
{

    function actionXml()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_XML;
        $items = [ 'guestbook' => [
            'guest' => ['fname' => 'Terje',
                'lname' => 'Beck'],
            'guest' =>['fname' => 's',
                'lname' => 'Beck']
            ]
        ];
        return $items;
    }
//$items = ['some', 'array', 'of', 'data' => ['associative', 'array']];
}
