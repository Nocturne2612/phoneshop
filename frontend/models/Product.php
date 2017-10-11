<?php

namespace frontend\models;

use Yii;
use yii\db\Expression;
use yii\data\Pagination;

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
        $order=SORT_ASC;
        $data = Product::find()
        ->asArray()->orderBy(['proId' => $order])
        ->limit($limit)->all();
        return $data;
    }
    public function getProductByDesc($type,$limit=7){
        $order = SORT_DESC;
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
        $pages = $this->getPagerProduct($id); 
        $data =  $data = Product::find()->asArray()->where('catId IN ('.$id.')')->offset($pages->offset)->limit($pages->limit)->all();
        return $data; 
    }
    public function getPagerProduct($catId){

        // lấy sp nằm trong cat id con(vi du lấy tất cả sản phẩm của iphone 6)
        $data = Product::find()->asArray()->where('catId IN ('.$catId.')')->all();

        //tổng số sản phẩm 
        $pages = new Pagination(['totalCount' => count($data),'pageSize' => \Yii::$app->params['pageSize']]);
        return $pages; // giá trị pageSize nằm trong params fontend/config/main.php (giá trị số product hiện tại để là 4)
    }
    
    //lấy deltail product
    public function getProductById($proId){
        $data = Product::find()
                ->asArray()
                ->where('proId=:proId',['proId'=>$proId])
                ->one();
        return $data;
    }
    public function getProductBySearchPrice($firstPrice,$lastprice){
        $data = Product::find()
                ->asArray()
                ->where(['BETWEEN','price',$firstPrice,$lastprice])
                ->all();
        return $data;
    }

    public function getProductBySearchName($search){
        // $data = 'SELECT * FROM product WHERE MATCH(proName) against("$search")';
        $data = Product::find()
        ->asArray()
        ->where(['LIKE', 'proName', $search])
        ->all();
        return $data;
    }
   
     
}
