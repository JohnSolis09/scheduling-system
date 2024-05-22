<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property int $facility_id
 * @property int $location_id
 * @property string|null $no_of_pax
 * @property string $created_at
 * @property string $updated_at
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['facility_id', 'location_id', 'duration', 'date_start', 'date_end'], 'required'],
            [['facility_id', 'location_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['no_of_pax'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'facility_id' => 'Facility ID',
            'location_id' => 'Location ID',
            'no_of_pax' => 'No Of Pax',
            'duration' => 'Duration',
            'created_at' => 'Created At',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'updated_at' => 'Updated At',
        ];
    }
}
