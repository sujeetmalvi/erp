<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_extra".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $extra
 */
class StudentExtra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_extra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'extra'], 'required'],
            [['student_id'], 'integer'],
            [['extra'], 'string'],
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
            'extra' => 'Extra',
        ];
    }
}
