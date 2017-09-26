<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wishlist".
 *
 * @property integer $wisId
 * @property integer $userId
 * @property integer $proId
 * @property integer $dateCreate
 * @property integer $status
 */
class Wishlist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wishlist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'proId'], 'required'],
            [['userId', 'proId', 'dateCreate', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wisId' => 'Wis ID',
            'userId' => 'User ID',
            'proId' => 'Pro ID',
            'dateCreate' => 'Date Create',
            'status' => 'Status',
        ];
    }
}