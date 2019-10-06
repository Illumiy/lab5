<?php
namespace app\controllers;

use yii\rest\ActiveController;
use app\models\Tovar;
class RestController extends ActiveController
{
    public function behaviors(){
        return[
            'contentNegotiator'=> [
                'class'=> \yii\filters\ContentNegotiator::class,
                'formatParam'=>'_format',
                'formats'=>[
                    'application/json'=> \yii\web\Response::FORMAT_JSON,
                    'xml'=> \yii\web\Response::FORMAT_XML
                ]
            ]
                ];
    }
    public $modelClass = 'app\models\Tovar';
}
?>