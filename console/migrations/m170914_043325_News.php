<?php

use yii\db\Migration;

class m170914_043325_News extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%News}}', [
            'newsId' => $this->primaryKey(),
            'newsCatId' => $this->integer()->notNull(),
            'userId' => $this->integer()->notNull(),
            'name' => $this->string()->notNull()->unique(),
            'image' => $this->string(),
            'summary' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'dateCreate' => $this->integer()->notNull(),
            'updateAt' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%News}}');
    }
}
