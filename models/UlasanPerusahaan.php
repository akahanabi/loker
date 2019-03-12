<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ulasan_perusahaan".
 *
 * @property int $id
 * @property int $id_perusahaan
 * @property int $id_user
 * @property string $departemen
 * @property string $jabatan
 * @property string $tipe_pekerjaan
 * @property string $status_karyawan
 * @property string $lama_bekerja
 * @property string $rekomendasikan_teman
 * @property string $periode_gaji
 * @property string $gaji
 * @property string $tunjangan_dan_fasilitas
 * @property string $peluang_pengembangan_karir
 * @property string $work_life_balance
 * @property string $lingkungan_bekerja
 * @property string $jajaran_manajemen
 * @property string $tingkat_stress
 *
 * @property Perusahaan $perusahaan
 * @property User $user
 */
class UlasanPerusahaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ulasan_perusahaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_perusahaan', 'id_user', 'departemen', 'jabatan', 'tipe_pekerjaan', 'status_karyawan', 'lama_bekerja', 'rekomendasikan_teman', 'periode_gaji', 'gaji', 'tunjangan_dan_fasilitas', 'peluang_pengembangan_karir', 'work_life_balance', 'lingkungan_bekerja', 'jajaran_manajemen', 'tingkat_stress'], 'required'],
            [['id_perusahaan', 'id_user'], 'integer'],
            [['tipe_pekerjaan', 'status_karyawan', 'rekomendasikan_teman', 'periode_gaji', 'gaji', 'tunjangan_dan_fasilitas', 'peluang_pengembangan_karir', 'work_life_balance', 'lingkungan_bekerja', 'jajaran_manajemen', 'tingkat_stress'], 'string'],
            [['departemen', 'jabatan', 'lama_bekerja'], 'string', 'max' => 255],
            [['id_perusahaan'], 'exist', 'skipOnError' => true, 'targetClass' => Perusahaan::className(), 'targetAttribute' => ['id_perusahaan' => 'id']],
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
            'id_perusahaan' => 'Id Perusahaan',
            'id_user' => 'Id User',
            'departemen' => 'Departemen',
            'jabatan' => 'Jabatan',
            'tipe_pekerjaan' => 'Tipe Pekerjaan',
            'status_karyawan' => 'Status Karyawan',
            'lama_bekerja' => 'Lama Bekerja',
            'rekomendasikan_teman' => 'Rekomendasikan Teman',
            'periode_gaji' => 'Periode Gaji',
            'gaji' => 'Gaji',
            'tunjangan_dan_fasilitas' => 'Tunjangan Dan Fasilitas',
            'peluang_pengembangan_karir' => 'Peluang Pengembangan Karir',
            'work_life_balance' => 'Work Life Balance',
            'lingkungan_bekerja' => 'Lingkungan Bekerja',
            'jajaran_manajemen' => 'Jajaran Manajemen',
            'tingkat_stress' => 'Tingkat Stress',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerusahaan()
    {
        return $this->hasOne(Perusahaan::className(), ['id' => 'id_perusahaan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
