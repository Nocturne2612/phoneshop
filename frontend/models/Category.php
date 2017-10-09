<?php

namespace frontend\models;

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
            [['catName', 'dateCreate'], 'required'],
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

    //category left


    public function getCategoryBy($parentid=1){
        $data = Category::find()->asArray()->where('parentId=:parentId',['parentId'=>$parentid])->all();
        return $data;
    }
  
    //main menu
    public function getCategory(){
        $data = category::find()->asArray()->where( ['parentId' => 0])->all();
        
        return $data;
    }


    //lấy ra catID theo tham số truyền vào

    public function getCategoryById($catId){
        $data = Category::find()->asArray()->where('catId=:catId',['catId'=>$catId])->all();
        return $data;
    }   
}
