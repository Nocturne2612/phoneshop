<?php

use yii\db\Migration;

class m170920_065900_factory extends Migration
{
    
    
    public function up()
    {
         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%factory}}', [
            'facId' => $this->primaryKey(),
            'facName' => $this->string()->notNull()->unique(),
            'logo' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'dateCreate' => $this->integer()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
       $this->dropTable('{{%factory}}');
    }
    
}
