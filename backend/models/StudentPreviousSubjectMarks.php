<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_previous_subject_marks".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $subject
 * @property string $mark
 */
class StudentPreviousSubjectMarks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_previous_subject_marks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['subject', 'mark'], 'string', 'max' => 255],
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
            'subject' => 'Subject',
            'mark' => 'Mark',
        ];
    }
}
