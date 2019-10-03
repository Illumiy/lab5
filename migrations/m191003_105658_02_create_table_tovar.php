<?php

use yii\db\Migration;

class m191003_105658_02_create_table_tovar extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tovar}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'price' => $this->float()->notNull(),
            'name2' => $this->string()->notNull(),
            'name3' => $this->string()->notNull(),
            'id_cat' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('id_cat', '{{%tovar}}', 'id_cat');
        $this->addForeignKey('tovar_ibfk_1', '{{%tovar}}', 'id_cat', '{{%cat}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%tovar}}');
    }
}
