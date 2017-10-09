<?php

namespace frontend\models;

use Yii;
use yii\db\Expression;
use yii\data\Pagination;

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
    public function getNewByCatNewId($id){
        $pages = $this->getPagerNew($id); 
        $data =  $data = News::find()->asArray()->where('newsCatId IN ('.$id.')')->offset($pages->offset)->limit($pages->limit)->all();
        return $data; 
    }
    public function getPagerNew($catId){

        // lấy sp nằm trong cat id con(vi du lấy tất cả sản phẩm của iphone 6)
        $data = News::find()->asArray()->where('newsCatId IN ('.$catId.')')->all();

        //tổng số sản phẩm 
        $pages = new Pagination(['totalCount' => count($data),'pageSize' => \Yii::$app->params['pageSize']]);
        return $pages; // giá trị pageSize nằm trong params fontend/config/main.php (giá trị số product hiện tại để là 4)
    }
    //lấy deltail new
     public function getNewtById($newId){
         $data = News::find()->asArray()->where('newsId=:newsId',['newsId'=>$newId])->one();
         return $data;
     }

}
