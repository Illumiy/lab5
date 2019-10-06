<?php
namespace app\controllers;
use app\models\Server;
use yii\helpers\VarDumper;

class SoapController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex(){
        return Server::server();
    }
    public function actionClient()
    {
        $client = new \SoapClient(null, array(
            'location' =>
                "http://lab5:8080/web/index.php?r=soap%2Findex",
            'uri' => "http://lab5:8080/web/index.php?r=soap%2Findex",
            'trace' => 1));
        $return = $client->__soapCall("getCat", []);
        var_dump($return);
    }
}