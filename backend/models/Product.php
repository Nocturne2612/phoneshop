<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $proId
 * @property string $proName
 * @property integer $catId
 * @property integer $factoryId
 * @property string $images
 * @property integer $price
 * @property integer $saleOf
 * @property string $startSale
 * @property string $endSale
 * @property string $color
 * @property string $screenSize
 * @property string $resolution
 * @property string $peratingSystem
 * @property integer $cpu
 * @property integer $ram
 * @property integer $rom
 * @property string $mainCamera
 * @property string $secondaryCamera
 * @property integer $pin
 * @property string $description
 * @property string $content
 * @property integer $status
 * @property integer $dateCreate
 */
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
}
