<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property integer $id
 * @property integer $class_id
 * @property string $name
 * @property integer $session_id
 *
 * @property ClassSubject[] $classSubjects
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'name', 'session_id'], 'required'],
            [['class_id', 'session_id'], 'integer'],
            [['name'], 'string', 'max' => 11],
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
            'name' => 'Name',
            'session_id' => 'Session ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassSubjects()
    {
        return $this->hasMany(ClassSubject::className(), ['section_id' => 'id']);
    }
}
