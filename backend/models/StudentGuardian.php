<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_guardian".
 *
 * @property integer $id
 * @property integer $gid
 * @property integer $sid
 */
class StudentGuardian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_guardian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid', 'sid'], 'required'],
            [['gid', 'sid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gid' => 'Gid',
            'sid' => 'Sid',
        ];
    }
}
