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
            'proId' => 'ID',
            'proName' => 'Tên sản phẩm',
            'catId' => 'Danh mục cha',
            'factoryId' => 'Thương hiệu',
            'images' => 'Hình ảnh',
            'price' => 'Giá',
            'saleOf' => 'Giảm giá',
            'startSale' => 'Ngày bán',
            'endSale' => 'Ngày ngừng bán',
            'color' => 'Màu sắc',
            'screenSize' => 'Cỡ màn hình',
            'resolution' => 'Độ phân giải',
            'peratingSystem' => 'Hệ điều hành',
            'cpu' => 'CPU',
            'ram' => 'RAM',
            'rom' => 'ROM',
            'mainCamera' => 'Camera chính',
            'secondaryCamera' => 'Camera phụ',
            'pin' => 'Pin',
            'description' => 'Mô tả',
            'content' => 'Nội dung',
            'status' => 'Trạng thái',
            'dateCreate' => 'Ngày tạo',
        ];
    }
}
