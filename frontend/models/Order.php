<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $idOrder
 * @property string $fullName
 * @property string $name
 * @property string $province
 * @property string $district
 * @property string $ward
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $otherInformation
 * @property double $totalMoney
 * @property integer $paymen_id
 * @property integer $userId
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $user
 * @property OrderDetail[] $orderDetails
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullName', 'province', 'district', 'ward', 'address', 'phone', 'created_at'], 'required'],
            [['totalMoney'], 'number'],
            [['paymen_id', 'userId', 'status', 'created_at', 'updated_at'], 'integer'],
            [['fullName', 'name'], 'string', 'max' => 150],
            [['province', 'district', 'ward', 'address', 'otherInformation'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 100],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idOrder' => 'Id Order',
            'fullName' => 'Full Name',
            'name' => 'Name',
            'province' => 'Province',
            'district' => 'District',
            'ward' => 'Ward',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'otherInformation' => 'Other Information',
            'totalMoney' => 'Total Money',
            'paymen_id' => 'Paymen ID',
            'userId' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['order_id' => 'idOrder']);
    }
}
