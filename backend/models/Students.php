<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property integer $id
 * @property integer $uid
 * @property integer $parent_id
 * @property string $admission_no
 * @property string $class_roll_no
 * @property string $admission_date
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property integer $batch_id
 * @property string $date_of_birth
 * @property string $gender
 * @property string $blood_group
 * @property string $birth_place
 * @property integer $nationality_id
 * @property string $language
 * @property string $religion
 * @property integer $student_category_id
 * @property string $address_line1
 * @property string $address_line2
 * @property string $city
 * @property string $state
 * @property string $pin_code
 * @property integer $country_id
 * @property string $phone1
 * @property string $phone2
 * @property string $email
 * @property integer $immediate_contact_id
 * @property integer $is_sms_enabled
 * @property string $photo_file_name
 * @property string $photo_content_type
 * @property resource $photo_data
 * @property string $status_description
 * @property integer $is_active
 * @property integer $is_deleted
 * @property string $created_at
 * @property string $updated_at
 * @property integer $has_paid_fees
 * @property integer $photo_file_size
 * @property integer $user_id
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'parent_id'], 'required'],
            [['uid', 'parent_id', 'batch_id', 'nationality_id', 'student_category_id', 'country_id', 'immediate_contact_id', 'is_sms_enabled', 'is_active', 'is_deleted', 'has_paid_fees', 'photo_file_size', 'user_id'], 'integer'],
            [['admission_date', 'date_of_birth', 'created_at', 'updated_at'], 'safe'],
            [['photo_data'], 'string'],
            [['admission_no', 'class_roll_no', 'first_name', 'middle_name', 'last_name', 'gender', 'blood_group', 'birth_place', 'language', 'religion', 'address_line1', 'address_line2', 'city', 'state', 'pin_code', 'phone1', 'phone2', 'email', 'photo_file_name', 'photo_content_type', 'status_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'parent_id' => 'Parent ID',
            'admission_no' => 'Admission No',
            'class_roll_no' => 'Class Roll No',
            'admission_date' => 'Admission Date',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'batch_id' => 'Batch ID',
            'date_of_birth' => 'Date Of Birth',
            'gender' => 'Gender',
            'blood_group' => 'Blood Group',
            'birth_place' => 'Birth Place',
            'nationality_id' => 'Nationality ID',
            'language' => 'Language',
            'religion' => 'Religion',
            'student_category_id' => 'Student Category ID',
            'address_line1' => 'Address Line1',
            'address_line2' => 'Address Line2',
            'city' => 'City',
            'state' => 'State',
            'pin_code' => 'Pin Code',
            'country_id' => 'Country ID',
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'email' => 'Email',
            'immediate_contact_id' => 'Immediate Contact ID',
            'is_sms_enabled' => 'Is Sms Enabled',
            'photo_file_name' => 'Photo File Name',
            'photo_content_type' => 'Photo Content Type',
            'photo_data' => 'Photo Data',
            'status_description' => 'Status Description',
            'is_active' => 'Is Active',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'has_paid_fees' => 'Has Paid Fees',
            'photo_file_size' => 'Photo File Size',
            'user_id' => 'User ID',
        ];
    }
}
