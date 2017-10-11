<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $username
 * @property string $fullName
 * @property string $auth_key
 * @property string $email
 * @property string $phone
 * @property string $province
 * @property string $dictrict
 * @property string $ward
 * @property string $address
 * @property string $avatar
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $gender
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'fullName', 'auth_key', 'email', 'province', 'dictrict', 'ward', 'address', 'avatar', 'created_at', 'updated_at', 'password_hash'], 'required'],
            [['user_id', 'status', 'created_at', 'updated_at', 'gender'], 'integer'],
            [['username', 'fullName', 'email', 'phone', 'province', 'dictrict', 'ward', 'address', 'avatar', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['auth_key'], 'unique'],
            [['email'], 'unique'],
            [['phone'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'username' => 'Username',
            'fullName' => 'Full Name',
            'auth_key' => 'Auth Key',
            'email' => 'Email',
            'phone' => 'Phone',
            'province' => 'Province',
            'dictrict' => 'Dictrict',
            'ward' => 'Ward',
            'address' => 'Address',
            'avatar' => 'Avatar',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'gender' => 'Gender',
        ];
    }
}
