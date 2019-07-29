<?php
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property int $phone
 * @property string $avatar
 * @property string $birthday
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $verification_token
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public $file;

    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'first_name', 'last_name', 'phone', 'avatar', 'birthday', 'created_at', 'updated_at'], 'required'],
            [['phone', 'status', 'created_at', 'updated_at'], 'integer'],
            [['birthday'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'avatar', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['first_name', 'last_name'], 'string', 'max' => 50],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['file'], 'file', 'extensions' => 'jpg,png,gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'first_name' => 'Tên họ',
            'last_name' => 'Tên gọi',
            'phone' => 'Số điện thoại',
            'avatar' => 'Ảnh đại diện',
            'birthday' => 'Ngày tháng năm sinh',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
        ];
    }
}
