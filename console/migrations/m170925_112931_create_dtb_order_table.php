<?php

use yii\db\Migration;

/**
 * Handles the creation of table `dtb_order`.
 */
class m170925_112931_create_dtb_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('dtb_order', [
            'id' => $this->primaryKey(),
            'status' => $this->text(),
            'customer_id' => $this->text(),
            'order_name' => $this->text(),
            'order_email' => $this->text(),
            'order_tel' => $this->text(),
            'order_add' => $this->text(),
            'deliv_name' => $this->text(),
            'deliv_tel' => $this->text(),
            'deliv_add' => $this->text(),
            'create_date' => $this->date(),
            'update_date' => $this->date(),  
            'memo' => $this->text(),  
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('dtb_order');
    }
}
