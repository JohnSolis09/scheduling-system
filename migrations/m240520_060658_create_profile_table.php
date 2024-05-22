<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 */
class m240520_060658_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'facility_id'=> $this->integer()->notNull(),
            'location_id'=> $this->integer()->notNull(),
            'no_of_pax'=> $this->string(200),
            'created_at'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at'=> $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE CURRENT_TIMESTAMP')
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

        $this->dropTable('{{%profile}}');
    }
}
