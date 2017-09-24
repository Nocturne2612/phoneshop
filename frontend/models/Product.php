<?php

namespace frontend\models;

use Yii;
use yii\db\Expression;

class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proName', 'catId', 'factoryId', 'images', 'price', 'saleOf', 'startSale', 'endSale', 'color', 'screenSize', 'resolution', 'peratingSystem', 'cpu', 'ram', 'rom', 'mainCamera', 'secondaryCamera', 'pin', 'description', 'content', 'dateCreate'], 'required'],
            [['catId', 'factoryId', 'price', 'saleOf', 'cpu', 'ram', 'rom', 'pin', 'status', 'dateCreate'], 'integer'],
            [['startSale', 'endSale'], 'safe'],
            [['proName', 'images', 'color', 'screenSize', 'resolution', 'peratingSystem', 'mainCamera', 'secondaryCamera', 'description', 'content'], 'string', 'max' => 255],
            [['proName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proId' => 'Pro ID',
            'proName' => 'Pro Name',
            'catId' => 'Cat ID',
            'factoryId' => 'Factory ID',
            'images' => 'Images',
            'price' => 'Price',
            'saleOf' => 'Sale Of',
            'startSale' => 'Start Sale',
            'endSale' => 'End Sale',
            'color' => 'Color',
            'screenSize' => 'Screen Size',
            'resolution' => 'Resolution',
            'peratingSystem' => 'Perating System',
            'cpu' => 'Cpu',
            'ram' => 'Ram',
            'rom' => 'Rom',
            'mainCamera' => 'Main Camera',
            'secondaryCamera' => 'Secondary Camera',
            'pin' => 'Pin',
            'description' => 'Description',
            'content' => 'Content',
            'status' => 'Status',
            'dateCreate' => 'Date Create',
        ];
    }

    public function getProductBy($type,$limit=7){
        $order = SORT_DESC;
        if($type)
        {
            $order=SORT_ASC;
        }
        $data = Product::find()
        ->asArray()->orderBy(['proId' => $order])
        ->limit($limit)->all();
        return $data;
    }

    public function getRandom($limit=3){
        $queryRandom = Product::find()
        ->orderBy(new Expression('rand()'))
        ->asArray()
        ->limit($limit)
        ->all();
        return($queryRandom);
    }

    public function getProductByCatID($id){ 
        $data =  $data = Product::find()->asArray()->where('catId IN ('.$id.')')->all();
        return $data; // select * from product where catID =$id;
    }
//     public function getInfoProductBy($id){
//         $data = Product::find()->asArray()->where('proId=:id',['id'=>$id])->one();
//         return $data;
//     }
    
}
