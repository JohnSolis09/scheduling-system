<?php

use yii\db\Migration;

/**
 * Class m240522_024849_add_location_id_to_facility_table
 */
class m240522_024849_add_location_id_to_facility_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%facility}}', 'location_id', $this->integer()->notNull()->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    $this->dropColumn('{{%facility}}', 'location_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240522_024849_add_location_id_to_facility_table cannot be reverted.\n";

        return false;
    }
    */
}
