<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "district".
 *
 * @property string $districtid
 * @property string $name
 * @property string $type
 * @property string $location
 * @property string $provinceid
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['districtid', 'name', 'type', 'location', 'provinceid'], 'required'],
            [['districtid', 'provinceid'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 100],
            [['type', 'location'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'districtid' => 'Districtid',
            'name' => 'Name',
            'type' => 'Type',
            'location' => 'Location',
            'provinceid' => 'Provinceid',
        ];
    }
    public function getByID($id){
        $data= District::find()->asArray()->where('provinceid=:id',['id'=>$id])->all();
        return $data;
    }
    public function getAllDistrict(){
        $data = District::find()->asArray()->all();
        return $data;
    }
}
