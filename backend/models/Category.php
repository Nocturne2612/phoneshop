<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $catId
 * @property string $catName
 * @property integer $parentId
 * @property integer $status
 * @property integer $dateCreate
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catName', 'parentId', 'dateCreate'], 'required'],
            [['parentId', 'status', 'dateCreate'], 'integer'],
            [['catName'], 'string', 'max' => 255],
            [['catName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'catId' => 'Cat ID',
            'catName' => 'Cat Name',
            'parentId' => 'Parent ID',
            'status' => 'Status',
            'dateCreate' => 'Date Create',
        ];
    }
}
