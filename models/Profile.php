<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property int $user_id
 * @property int $facility_id
 * @property int $location_id
 * @property string|null $no_of_pax
 * @property string $created_at
 * @property string $updated_at
 */
class Profile extends \yii\db\ActiveRecord
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
            [['user_id', 'facility_id', 'location_id'], 'required'],
            [['user_id', 'facility_id', 'location_id', 'approve_id', 'archive'], 'integer'],
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
            'user_id' => 'User ID',
            'facility_id' => 'Facility ID',
            'location_id' => 'Location ID',
            'no_of_pax' => 'No Of Pax',
            'approve_id' => 'Approve',
            'archive' => 'Archive',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
