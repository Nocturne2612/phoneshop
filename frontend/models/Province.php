<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property string $provinceid
 * @property string $name
 * @property string $type
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['provinceid', 'name', 'type'], 'required'],
            [['provinceid'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'provinceid' => 'Provinceid',
            'name' => 'Name',
            'type' => 'Type',
        ];
    }

    public function getAllProvince(){
        $data = Province::find()->asArray()->all();
        return $data;
    }
}
