<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organisasi".
 *
 * @property int $id
 * @property int $id_user
 * @property string $nama
 * @property string $posisi
 * @property string $tahun_mulai
 * @property string $tahun_selesai
 * @property int $deskripsi
 *
 * @property User $user
 */
class Organisasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organisasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'nama', 'posisi', 'tahun_mulai', 'tahun_selesai'], 'required'],
            [['id_user', 'deskripsi'], 'integer'],
            [['tahun_mulai', 'tahun_selesai'], 'safe'],
            [['nama', 'posisi'], 'string', 'max' => 255],
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
            'posisi' => 'Posisi',
            'tahun_mulai' => 'Tahun Mulai',
            'tahun_selesai' => 'Tahun Selesai',
            'deskripsi' => 'Deskripsi',
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
