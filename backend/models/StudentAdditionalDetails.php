<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_additional_details".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $additional_field_id
 * @property string $additional_info
 */
class StudentAdditionalDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_additional_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'additional_field_id'], 'integer'],
            [['additional_info'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'additional_field_id' => 'Additional Field ID',
            'additional_info' => 'Additional Info',
        ];
    }
}
