<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat".
 *
 * @property int $id
 * @property string $name
 * @property string $name2
 * @property string $name3
 * @property string $name4
 * @property string $name5
 *
 * @property Tovar[] $tovars
 */
class Cat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'name2', 'name3', 'name4', 'name5'], 'required'],
            [['name', 'name2', 'name3', 'name4', 'name5'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'name2' => 'Name2',
            'name3' => 'Name3',
            'name4' => 'Name4',
            'name5' => 'Name5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTovars()
    {
        return $this->hasMany(Tovar::className(), ['id_cat' => 'id']);
    }
}
