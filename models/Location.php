<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property int $id
 * @property string $location_name
 * @property int $status
 */
class Location extends \yii\db\ActiveRecord
{
    const STATUS_AVAILABLE = 1;
    const STATUS_UNAVAILABLE = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location_name',], 'required'],
            [['location_name'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_name' => 'Location Name',
           
        ];
    }
    public static function getLocation() {
        return self::find()->orderBy(['location_name'=> SORT_DESC])->all();
    }
}
