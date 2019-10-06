<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Tovar;
use app\models\Cat;

/**
 * ContactForm is the model behind the contact form.
 */
class Server extends Model
{
    public function getItem($id){
        $model=new Tovar;
        $items=$model->find()->asArray()->where(['id_cat' => $id])->all();
        return $items;
    }
    public function getItemBez($id){
        $model=new Tovar;
        $items=$model->find()->asArray()->where(['<>','id', $id])->all();
        return $items;
    }
    public function getCat(){
        $model=new Cat;
        $items=$model->find()->asArray()->all();
        return $items;
    }
    public function Hello()
    {
        return 'привет, я работаю';
    }
    public static function server()
    {
        $server = new \SoapServer(null, array('uri' => "http://lab5:8080/web/index.php?r=soap%2Findex"));
        $server->setObject(new Server());
        ob_start();
        $server->handle();
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }
}