<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dtb_order".
 *
 * @property integer $id
 * @property string $status
 * @property string $customer_id
 * @property string $order_name
 * @property string $order_email
 * @property string $order_tel
 * @property string $order_add
 * @property string $deliv_name
 * @property string $deliv_tel
 * @property string $deliv_add
 * @property string $create_date
 * @property string $update_date
 * @property string $memo
 */
class DtbOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dtb_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'customer_id', 'order_name', 'order_email', 'order_tel', 'order_add', 'deliv_name', 'deliv_tel', 'deliv_add', 'memo'], 'string'],
            [['create_date', 'update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'customer_id' => 'Customer ID',
            'order_name' => 'Order Name',
            'order_email' => 'Order Email',
            'order_tel' => 'Order Tel',
            'order_add' => 'Order Add',
            'deliv_name' => 'Deliv Name',
            'deliv_tel' => 'Deliv Tel',
            'deliv_add' => 'Deliv Add',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'memo' => 'Memo',
        ];
    }
}
