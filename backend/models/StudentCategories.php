<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_categories".
 *
 * @property integer $id
 * @property string $name
 * @property integer $is_deleted
 */
class StudentCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'is_deleted' => 'Is Deleted',
        ];
    }
}
