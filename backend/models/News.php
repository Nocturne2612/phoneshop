<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $newsId
 * @property integer $newsCatId
 * @property integer $userId
 * @property string $name
 * @property string $image
 * @property string $summary
 * @property string $content
 * @property integer $status
 * @property integer $dateCreate
 * @property integer $updateAt
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'userId', 'newsCatId', 'name', 'summary', 'content'], 'required','message' => '{attribute} không được để trống'],
            [['newsCatId', 'userId', 'status', 'dateCreate', 'updateAt'], 'integer'],
            [['name', 'image', 'summary', 'content'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newsId' => 'ID',
            'newsCatId' => 'Danh mục',
            'userId' => 'Tác giả',
            'name' => 'Tên bài viết',
            'image' => 'Hình ảnh',
            'summary' => 'Mô tả',
            'content' => 'Nội dung',
            'status' => 'Trạng thái',
            'dateCreate' => 'Ngày tạo',
            'updateAt' => 'Ngày sửa',
        ];
    }
}
