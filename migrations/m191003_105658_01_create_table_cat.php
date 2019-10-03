<?php

use yii\db\Migration;

class m191003_105658_01_create_table_cat extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cat}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'name2' => $this->string()->notNull(),
            'name3' => $this->string()->notNull(),
            'name4' => $this->string()->notNull(),
            'name5' => $this->string()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%cat}}');
    }
}
