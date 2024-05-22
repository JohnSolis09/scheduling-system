<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%analyst}}`.
 */
class m240522_073337_create_analyst_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%analyst}}', [
            'id' => $this->primaryKey(),
            'user_id'=> $this->integer()->notNull(),
            'request_id'=> $this->integer()->notNull(),
            'facility_id'=> $this->integer()->notNull(),
            'location_id'=> $this->integer()->notNull(),
            'no_of_pax'=> $this->string(200),
            'duration'=> $this->string(200),
            'archive'=> $this->integer()->notNull(),
            'sched_status'=> $this->integer()->notNull(),
            'status'=> $this->integer()->notNull(),
            'date_start'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'date_end'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'approved_by'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'approve_at'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%analyst}}');
    }
}
