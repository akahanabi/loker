<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sertifikasi".
 *
 * @property int $id
 * @property int $id_user
 * @property string $nama
 * @property string $tanggal
 * @property string $dikeluarkan_oleh
 * @property string $file
 *
 * @property User $user
 */
class Sertifikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sertifikasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'nama', 'tanggal', 'dikeluarkan_oleh', 'file'], 'required'],
            [['id_user'], 'integer'],
            [['tanggal'], 'safe'],
            [['nama', 'dikeluarkan_oleh', 'file'], 'string', 'max' => 255],
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
            'nama' => 'Nama',
            'tanggal' => 'Tanggal',
            'dikeluarkan_oleh' => 'Dikeluarkan Oleh',
            'file' => 'File',
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
