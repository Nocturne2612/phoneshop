<?php

use yii\db\Migration;

class m170914_024101_Product extends Migration
{
    public function up()
    {

         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%Product}}', [
            'proId' => $this->primaryKey(),
            'proName' => $this->string()->notNull()->unique(),
            'catId' => $this->integer()->notNull(),
            'factoryId' => $this->integer()->notNull(),
            'images' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'saleOf' => $this->integer()->notNull(),
            'startSale' => $this->date()->notNull(),
            'endSale' => $this->date()->notNull(),
            'color' => $this->string()->notNull(),
            'screenSize'=> $this->string()->notNull(),
            'resolution'=> $this->string()->notNull(),
            'peratingSystem'=> $this->string()->notNull(),
            'cpu'=> $this->integer()->notNull(),
            'ram'=> $this->integer()->notNull(),
            'rom'=> $this->integer()->notNull(),
            'mainCamera'=> $this->string()->notNull(),
            'secondaryCamera'=> $this->string()->notNull(),
            'pin'=> $this->integer()->notNull(),
            'description' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'dateCreate' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%Product}}');
    }
}
