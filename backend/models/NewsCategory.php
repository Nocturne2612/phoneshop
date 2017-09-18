<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news_category".
 *
 * @property integer $newsCatId
 * @property string $newsCatName
 * @property integer $parentId
 * @property integer $status
 * @property integer $dateCreate
 */
class NewsCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['newsCatName', 'parentId'], 'required', 'message' => '{attribute} không được để trống'],
            [['parentId', 'status', 'dateCreate','updateAt'], 'integer'],
            [['newsCatName'], 'string', 'max' => 255],
            [['newsCatName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newsCatId' => 'ID',
            'newsCatName' => 'Danh mục tin tức',
            'parentId' => 'Danh mục cha',
            'status' => 'Trạng thái',
            'dateCreate' => 'Ngày khởi tạo',
            'updateAt' => 'Ngày cập nhật',
        ];
    }

    public function getNewsCategory()
    {
        $list = NewsCategory::find()
//            ->where(['status' => '1'])
            -> asArray()
            ->all();
        return $list;
    }
}
