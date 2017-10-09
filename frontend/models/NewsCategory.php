<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "news_category".
 *
 * @property integer $newsCatId
 * @property string $newsCatName
 * @property integer $parentId
 * @property integer $status
 * @property integer $dateCreate
 * @property integer $updateAt
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
            [['newsCatName', 'dateCreate', 'updateAt'], 'required'],
            [['parentId', 'status', 'dateCreate', 'updateAt'], 'integer'],
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
            'newsCatId' => 'News Cat ID',
            'newsCatName' => 'News Cat Name',
            'parentId' => 'Parent ID',
            'status' => 'Status',
            'dateCreate' => 'Date Create',
            'updateAt' => 'Update At',
        ];
    }

    public function getNewsBy($newsCatId=0){
        $data = NewsCategory::find()->asArray()->where('parentId=:newsCatId',['newsCatId'=>$newsCatId])->all();
        return $data;
    }

    // public function getNews(){
    //     $data = NewsCategory::find()->asArray()->where( ['parentId' => null])->all();
    //     return $data;
    // }  
}
