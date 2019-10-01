<?php

namespace app\controllers;

use app\models\DemoXml;
use Yii;
use XMLReader;
use yii\web\Controller;

class DemoController extends Controller
{

//    function actionXml()
//    {
//        \Yii::$app->response->format=\yii\web\Response::FORMAT_XML;
//        return $this->renderPartial('xml');
//    }
    function actionXml()
    {
      //  $filepath='xml\guest.xml';
        DemoXml::generateXml();
//        if (file_exists($filepath)) {
//            header("Content-Type: application/xml");
//            header("Content-Disposition: attachment; filename= " . $filepath);
//            readfile($filepath);
//        }
//        else {
//            throw new \yii\web\HttpException(404, 'Файл не найден');
//        }

    }
}


//        $reader = new XMLReader();
//        $reader->open('app/xml/guest.xml');

//$items = ['some', 'array', 'of', 'data' => ['associative', 'array']];





//        $peremens=[
//            '0'=> [
//                '0'=>'Terje',
//                '1'=>'Beck',
//            ],
//            '1'=> [
//                '0'=>'Jan',
//                '1'=>'Refsnes',
//            ],
//            '2'=> [
//                '0'=>'Torleif',
//                '1'=>'Rasmussen',
//            ],
//            '3'=> [
//                '0'=>'anton',
//                '1'=>'chek',
//            ],
//            '4'=> [
//                '0'=>'stale',
//                '1'=>'refsnes',
//            ],
//            '5'=> [
//                '0'=>'hari',
//                '1'=>'prawin',
//            ],
//            '6'=> [
//                '0'=>'Hege',
//                '1'=>'Refsnes',
//            ],
//        ];
//        \Yii::$app->response->format = \yii\web\Response::FORMAT_XML;
//        return $this->renderPartial('demos');


//        \Yii::$app->response->format =  \yii\web\Response::FORMAT_XML;
//
//        $items = [ 'guestbook' => [
//            'guest' => [
//                'fname' => 'Terje',
//                'lname' => 'Beck'
//            ],
//            'guest' =>[
//                'fname' => 's',
//                'lname' => 'Beck'
//            ],
//            ]
//        ];
//        return $items;
//        $dom = new domDocument("1.0", "utf-8"); // Создаём XML-документ версии 1.0 с кодировкой utf-8
//        $root = $dom->createElement("guestbook"); // Создаём корневой элемент
//        $dom->appendChild($root);
//        $fnames = array("Terje", "Jan", "Torleif", "anton", "stale", "hari", "Hege"); // Логины пользователей
//        $lnames = array("Beck", "Refsnes", "Rasmussen", "chek", "refsnes", "prawin", "Refsnes"); // Пароли пользователей
//        for ($i = 0; $i < count($fnames); $i++) {
//
//            $guest = $dom->createElement("guest"); // Создаём узел "user"
//            $fname = $dom->createElement("fname", $fnames[$i]); // Создаём узел "login" с текстом внутри
//            $lname = $dom->createElement("lname", $lnames[$i]); // Создаём узел "password" с текстом внутри
//            $guest->appendChild($fname); // Добавляем в узел "user" узел "login"
//            $guest->appendChild($lname);// Добавляем в узел "user" узел "password"
//            $root->appendChild($guest); // Добавляем в корневой узел "users" узел "user"
//        }
//        $dom->save("guest.xml"); // Сохраняем полученный XML-документ в файл
//        }
