<?php

use yii\db\Migration;

class m170914_040349_News_category extends Migration
{
    public function up()
    {
         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%News_category}}', [
            'newsCatId' => $this->primaryKey(),
            'newsCatName' => $this->string()->notNull()->unique(),
            'parentId' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'dateCreate' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
       $this->dropTable('{{%News_category}}');
    }
}
