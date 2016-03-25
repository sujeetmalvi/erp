<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "students_subjects".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $subject_id
 * @property integer $batch_id
 */
class StudentsSubjects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students_subjects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'subject_id', 'batch_id'], 'integer'],
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
            'subject_id' => 'Subject ID',
            'batch_id' => 'Batch ID',
        ];
    }
}
