<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengalaman".
 *
 * @property int $id
 * @property int $id_user
 * @property string $nama_perusahaan
 * @property string $posisi
 * @property int $gaji
 * @property string $sembunyikan_gaji
 * @property string $bulan_mulai
 * @property int $tahun_mulai
 * @property string $bulan_akhir
 * @property int $tahun_akhir
 * @property string $tugas_dan_tanggungjawab
 *
 * @property User $user
 */
class Pengalaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengalaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'nama_perusahaan', 'posisi', 'gaji', 'sembunyikan_gaji', 'bulan_mulai', 'tahun_mulai', 'tugas_dan_tanggungjawab'], 'required'],
            [['id_user', 'gaji', 'tahun_mulai', 'tahun_akhir'], 'integer'],
            [['sembunyikan_gaji', 'bulan_mulai', 'bulan_akhir', 'tugas_dan_tanggungjawab'], 'string'],
            [['nama_perusahaan', 'posisi'], 'string', 'max' => 255],
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
            'nama_perusahaan' => 'Nama Perusahaan',
            'posisi' => 'Posisi',
            'gaji' => 'Gaji',
            'sembunyikan_gaji' => 'Sembunyikan Gaji',
            'bulan_mulai' => 'Bulan Mulai',
            'tahun_mulai' => 'Tahun Mulai',
            'bulan_akhir' => 'Bulan Akhir',
            'tahun_akhir' => 'Tahun Akhir',
            'tugas_dan_tanggungjawab' => 'Tugas Dan Tanggungjawab',
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
