<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $newsId
 * @property integer $newsCatId
 * @property integer $userId
 * @property string $author
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

            [['newsCatId', 'userId', 'author', 'name', 'summary', 'content', 'dateCreate', 'updateAt'], 'required'],
            [['newsCatId', 'userId', 'status', 'dateCreate', 'updateAt'], 'integer'],
            [['summary', 'content'], 'string'],
            [['author', 'name', 'image'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newsId' => 'News ID',
            'newsCatId' => 'Danh Mục Tin',
            'userId' => 'User ID',
            'author' => 'Tác Giả',
            'name' => 'Tên Bài Viết',
            'image' => 'Ảnh',
            'summary' => 'Tóm Tắt',
            'content' => 'Nội Dung',
            'status' => 'Trạng Thái',
            'dateCreate' => 'Ngày Tạo Bài',
            'updateAt' => 'Ngày Cập Nhật Bài',
        ];
    }
}
