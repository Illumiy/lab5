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
}