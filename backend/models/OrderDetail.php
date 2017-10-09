<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property integer $idOrderDetails
 * @property integer $productId
 * @property string $productName
 * @property string $image
 * @property double $price
 * @property integer $quantity
 * @property double $totalMoney
 * @property string $color
 * @property integer $status
 * @property integer $order_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Order $order
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productId', 'productName', 'price', 'totalMoney', 'order_id', 'created_at'], 'required'],
            [['productId', 'quantity', 'status', 'order_id', 'created_at', 'updated_at'], 'integer'],
            [['price', 'totalMoney'], 'number'],
            [['productName', 'image', 'color'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'idOrder']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idOrderDetails' => 'Id Order Details',
            'productId' => 'Product ID',
            'productName' => 'Product Name',
            'image' => 'Image',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'totalMoney' => 'Total Money',
            'color' => 'Color',
            'status' => 'Status',
            'order_id' => 'Order ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['idOrder' => 'order_id']);
    }
}
