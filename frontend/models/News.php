<?php

namespace frontend\models;

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
            [['newsCatId', 'userId', 'name', 'summary', 'content', 'dateCreate', 'updateAt'], 'required'],
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
            'newsId' => 'News ID',
            'newsCatId' => 'News Cat ID',
            'userId' => 'User ID',
            'name' => 'Name',
            'image' => 'Image',
            'summary' => 'Summary',
            'content' => 'Content',
            'status' => 'Status',
            'dateCreate' => 'Date Create',
            'updateAt' => 'Update At',
        ];
    }

}
