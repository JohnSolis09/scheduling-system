<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 */
class m240522_073110_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'user_id'=> $this->integer()->notNull(),
            'facility_id'=> $this->integer()->notNull(),
            'location_id'=> $this->integer()->notNull(),
            'approve_id'=> $this->integer()->notNull(),
            'archive'=> $this->integer()->notNull(),
            'no_of_pax'=> $this->string(200),
            'duration'=> $this->string(200),
            'date_start'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'date_end'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'created_at'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%profile}}');
    }
}
