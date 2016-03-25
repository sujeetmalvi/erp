<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_previous_datas".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $institution
 * @property string $year
 * @property string $course
 * @property string $total_mark
 */
class StudentPreviousDatas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_previous_datas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['institution', 'year', 'course', 'total_mark'], 'string', 'max' => 255],
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
            'institution' => 'Institution',
            'year' => 'Year',
            'course' => 'Course',
            'total_mark' => 'Total Mark',
        ];
    }
}
