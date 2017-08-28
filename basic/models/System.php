<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "system".
 *
 * @property integer $employee_id
 * @property string $employee_name
 * @property integer $employee_number
 * @property integer $room_number
 * @property string $room_type
 * @property string $hoover_carpet
 * @property string $clean_tub
 * @property string $change_bedsheet
 * @property string $replenish_supplies
 */
class System extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'system';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_number', 'room_number', 'room_type', 'hoover_carpet', 'clean_tub', 'change_bedsheet', 'replenish_supplies'], 'required'],
            [['employee_number', 'room_number'], 'integer'],
            [['employee_name'], 'string', 'max' => 250],
            [['room_type', 'hoover_carpet', 'clean_tub', 'change_bedsheet', 'replenish_supplies'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'employee_name' => 'Employee Name',
            'employee_number' => 'Employee Number',
            'room_number' => 'Room Number',
            'room_type' => 'Room Type',
            'hoover_carpet' => 'Hoover Carpet',
            'clean_tub' => 'Clean Tub',
            'change_bedsheet' => 'Change Bedsheet',
            'replenish_supplies' => 'Replenish Supplies',
        ];
    }
}
