<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "lowongan".
 *
 * @property int $id
 * @property int $id_perusahaan
 * @property string $judul
 * @property string $posisi
 * @property string $tipe_pekerjaan
 * @property int $gaji
 * @property string $pengalaman
 * @property int $id_pendidikan
 * @property string $lokasi_kerja
 * @property int $id_kelurahan
 * @property string $latitude
 * @property string $longitude
 * @property string $deskripsi_pekerjaan
 * @property string $persyaratan
 * @property string $tanggal_posting
 * @property string $tanggal_ditutup
 * @property string $status
 *
 * @property Lamaran[] $lamarans
 * @property Perusahaan $perusahaan
 * @property Kelurahan $kelurahan
 * @property Pendidikan $pendidikan
 * @property Penawaran[] $penawarans
 */
class Lowongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lowongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_perusahaan', 'judul', 'posisi', 'tipe_pekerjaan', 'gaji', 'pengalaman', 'id_pendidikan', 'lokasi_kerja', 'id_kelurahan', 'latitude', 'longitude', 'deskripsi_pekerjaan', 'persyaratan', 'tanggal_posting', 'tanggal_ditutup', 'status'], 'required'],
            [['id_perusahaan', 'gaji', 'id_pendidikan', 'id_kelurahan'], 'integer'],
            [['tipe_pekerjaan', 'deskripsi_pekerjaan', 'persyaratan', 'status'], 'string'],
            [['tanggal_posting', 'tanggal_ditutup'], 'safe'],
            [['judul', 'posisi', 'pengalaman', 'lokasi_kerja', 'latitude', 'longitude'], 'string', 'max' => 255],
            [['id_perusahaan'], 'exist', 'skipOnError' => true, 'targetClass' => Perusahaan::className(), 'targetAttribute' => ['id_perusahaan' => 'id']],
            [['id_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => Kelurahan::className(), 'targetAttribute' => ['id_kelurahan' => 'id']],
            [['id_pendidikan'], 'exist', 'skipOnError' => true, 'targetClass' => Pendidikan::className(), 'targetAttribute' => ['id_pendidikan' => 'id']],
            ['slug','safe'],
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
            'judul' => 'Judul',
            'posisi' => 'Posisi',
            'tipe_pekerjaan' => 'Tipe Pekerjaan',
            'gaji' => 'Gaji',
            'pengalaman' => 'Pengalaman',
            'id_pendidikan' => 'Id Pendidikan',
            'lokasi_kerja' => 'Lokasi Kerja',
            'id_kelurahan' => 'Id Kelurahan',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'deskripsi_pekerjaan' => 'Deskripsi Pekerjaan',
            'persyaratan' => 'Persyaratan',
            'tanggal_posting' => 'Tanggal Posting',
            'tanggal_ditutup' => 'Tanggal Ditutup',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLamarans()
    {
        return $this->hasMany(Lamaran::className(), ['id_lowongan' => 'id']);
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
    public function getKelurahan()
    {
        return $this->hasOne(Kelurahan::className(), ['id' => 'id_kelurahan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikan()
    {
        return $this->hasOne(Pendidikan::className(), ['id' => 'id_pendidikan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenawarans()
    {
        return $this->hasMany(Penawaran::className(), ['id_lowongan' => 'id']);
    }
    public function behaviors(){
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'judul',
                //'slugAttribute' => 'slug'
            ],
        ];
    }
}
