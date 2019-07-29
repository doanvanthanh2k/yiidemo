<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "experiences".
 *
 * @property int $id
 * @property int $user_id
 * @property string $started_date
 * @property string $finished_date
 * @property string $company
 * @property string $description
 * @property int $created_at
 * @property int $updated_at
 *
 * @property User $user
 */
class Experiences extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'experiences';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'started_date', 'finished_date', 'company', 'description', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'created_at', 'updated_at'], 'integer'],
            [['started_date', 'finished_date'], 'safe'],
            [['company'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'started_date' => 'Ngày bắt đầu',
            'finished_date' => 'Ngày kết thúc',
            'company' => 'Tên công ty',
            'description' => 'Mô tả',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
