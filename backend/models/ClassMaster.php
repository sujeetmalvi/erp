<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "class_master".
 *
 * @property integer $id
 * @property string $name
 *
 * @property ClassSubject[] $classSubjects
 */
class ClassMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 110],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassSubjects()
    {
        return $this->hasMany(ClassSubject::className(), ['class_id' => 'id']);
    }
}
