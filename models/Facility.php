<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facility".
 *
 * @property int $id
 * @property string $facility_name
 * @property int $status
 */
class Facility extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'facility';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['facility_name', 'status'], 'required'],
            [['status'], 'integer'],
            [['facility_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'facility_name' => 'Facility Name',
            'status' => 'Status',
        ];
    }
}