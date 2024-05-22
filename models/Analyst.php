<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "analyst".
 *
 * @property int $id
 * @property int $user_id
 * @property int $request_id
 * @property int $facility_id
 * @property int $location_id
 * @property string|null $no_of_pax
 * @property int $archive
 * @property int $sched_status
 * @property int $status
 * @property string $approved_by
 * @property string $approve_at
 */
class Analyst extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'analyst';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'request_id', 'facility_id', 'location_id', 'archive', 'sched_status', ], 'required'],
            [['user_id', 'request_id', 'facility_id', 'location_id', 'archive', 'sched_status', 'status'], 'integer'],
            [['approved_by', 'approve_at', 'status', 'duration', 'date_start', 'date_end'], 'safe'],
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
            'request_id' => 'Request ID',
            'facility_id' => 'Facility ID',
            'location_id' => 'Location ID',
            'no_of_pax' => 'No Of Pax',
            'duration' => 'Duration',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'archive' => 'Archive',
            'sched_status' => 'Sched Status',
            'status' => 'Status',
            'approved_by' => 'Approved By',
            'approve_at' => 'Approve At',
        ];
    }
}
