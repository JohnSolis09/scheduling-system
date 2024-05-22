<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%analyst}}`.
 */
class m240522_014400_create_analyst_table extends Migration
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
            'archive'=> $this->integer()->notNull(),
            'sched_status'=> $this->integer()->notNull(),
            'status'=> $this->integer()->notNull(),
            'approved_by'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'approve_at'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE CURRENT_TIMESTAMP')
        ]);
        // $this->createIndex('idx-profile-facility_id', '{{%facility}}', 'facility_id');
        // $this->addForeignKey('fk-profile-facility_id', '{{%facility}}', 'facility_id', '{{%facility}}', 'id', 'SET NULL');

        // $this->createIndex('idx-profile-location_id', '{{%location}}', 'location_id');
        // $this->addForeignKey('fk-profile-location_id', '{{%location}}', 'location_id', '{{%location}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropForeignKey('fk-profile-facility_id', '{{%profile}}');
        // $this->dropIndex('idx-profile-facility_id', '{{%profile}}');

        // $this->dropForeignKey('fk-profile-location_id', '{{%profile}}');
        // $this->dropIndex('idx-profile-location_id', '{{%profile}}');

        $this->dropTable('{{%analyst}}');
    }
}
