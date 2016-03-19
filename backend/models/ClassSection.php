<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "class_section".
 *
 * @property integer $id
 * @property integer $class_id
 * @property integer $section_id
 * @property integer $status
 */
class ClassSection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'section_id', 'status'], 'required'],
            [['class_id', 'section_id', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class_id' => 'Class ID',
            'section_id' => 'Section ID',
            'status' => 'Status',
        ];
    }
}
