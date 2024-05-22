<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%facility}}`.
 */
class m240520_054736_create_facility_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%facility}}', [
            'id' => $this->primaryKey(),
            'facility_name'=> $this->string()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%facility}}');
    }
}
