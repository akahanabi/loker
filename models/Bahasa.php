<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bahasa".
 *
 * @property int $id
 * @property int $id_user
 * @property string $bahasa
 * @property string $level_berbicara
 * @property string $level_menulis_membaca
 *
 * @property User $user
 */
class Bahasa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahasa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'bahasa', 'level_berbicara', 'level_menulis_membaca'], 'required'],
            [['id_user'], 'integer'],
            [['level_berbicara', 'level_menulis_membaca'], 'string'],
            [['bahasa'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'bahasa' => 'Bahasa',
            'level_berbicara' => 'Level Berbicara',
            'level_menulis_membaca' => 'Level Menulis Membaca',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
