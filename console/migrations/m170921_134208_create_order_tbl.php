<?php

use yii\db\Migration;

class m170921_134208_create_order_tbl extends Migration
{
    public function safeUp()
    {
          $this->createTable('dtb_order', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer(),
            'create_date' =>  $this->dateTime(),
            'update_date' =>  $this->dateTime(),
            'status' => $this->integer(),
        ]);
         $this->addForeignKey(
            'fk-order-customer_id',
            'dtb_order',
            'customer_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        echo "m170921_134208_create_order_tbl cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170921_134208_create_order_tbl cannot be reverted.\n";

        return false;
    }
    */
}
