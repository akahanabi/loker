<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riwayat_pendidikan".
 *
 * @property int $id
 * @property int $id_user
 * @property string $institusi
 * @property int $id_pendidikan
 * @property string $jurusan
 * @property int $tahun_masuk
 * @property int $tahun_lulus
 * @property int $ipk
 *
 * @property User $user
 * @property Pendidikan $pendidikan
 */
class RiwayatPendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'institusi', 'id_pendidikan', 'tahun_masuk'], 'required'],
            [['id_user', 'id_pendidikan', 'tahun_masuk', 'tahun_lulus', 'ipk'], 'integer'],
            [['institusi', 'jurusan'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_pendidikan'], 'exist', 'skipOnError' => true, 'targetClass' => Pendidikan::className(), 'targetAttribute' => ['id_pendidikan' => 'id']],
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
            'institusi' => 'Institusi',
            'id_pendidikan' => 'Id Pendidikan',
            'jurusan' => 'Jurusan',
            'tahun_masuk' => 'Tahun Masuk',
            'tahun_lulus' => 'Tahun Lulus',
            'ipk' => 'Ipk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikan()
    {
        return $this->hasOne(Pendidikan::className(), ['id' => 'id_pendidikan']);
    }
}
