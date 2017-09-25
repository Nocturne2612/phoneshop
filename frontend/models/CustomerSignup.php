<?php
namespace frontend\models;

use yii\base\Model;
use common\models\Customer;

/**
 * Signup form
 */
class CustomerSignup extends Model
{
    public $customerName;
    public $email;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['customerName', 'trim'],
            ['customerName', 'required'],
            ['customerName', 'unique', 'targetClass' => '\common\models\Customer', 'message' => 'This customerName has already been taken.'],
            ['customerName', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\Customer', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $customer = new Customer();
        $customer->customerName = $this->customerName;
        $customer->email = $this->email;
        $customer->setPassword($this->password);
        $customer->generateAuthKey();
        
        return $customer->save() ? $customer : null;
    }
}
