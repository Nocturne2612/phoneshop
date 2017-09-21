<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "factory".
 *
 * @property integer $facId
 * @property string $facName
 * @property string $logo
 * @property integer $status
 * @property integer $dateCreate
 */
class Factory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'factory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['facName', 'logo', 'dateCreate'], 'required'],
            [['status', 'dateCreate'], 'integer'],
            [['facName', 'logo'], 'string', 'max' => 255],
            [['facName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'facId' => 'Fac ID',
            'facName' => 'Fac Name',
            'logo' => 'Logo',
            'status' => 'Status',
            'dateCreate' => 'Date Create',
        ];
    }

        public function getAllFac(){
        $data = Factory::find()
                ->where(['status'=>'1'])
                ->all();
        return $data;
    }
}
