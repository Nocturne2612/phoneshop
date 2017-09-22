<?php

use yii\db\Migration;

class m170922_030113_customer extends Migration
{
   public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%customer}}', [
            'customerId' => $this->primaryKey(),
            'customerName' => $this->string()->notNull()->unique(),
            'fullName' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull()->unique(),
            'password' => $this->string()->notNull(),
//            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'phone' => $this->string()->notNull()->unique(),
            'province' => $this->string()->notNull(),
            'dictrict' => $this->string()->notNull(),
            'ward' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'avatar' => $this->string()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'dateCreate' => $this->integer()->notNull(),
            'updateAt' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%customer}}');
    }
}
