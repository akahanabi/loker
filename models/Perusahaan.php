<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perusahaan".
 *
 * @property int $id
 * @property int $id_user
 * @property string $nama
 * @property string $logo
 * @property int $id_industri
 * @property int $jumlah_karyawan
 * @property string $deskripsi
 * @property string $alamat
 * @property int $id_kelurahan
 * @property string $latitude
 * @property string $longitude
 * @property string $no_telepon
 * @property string $email
 * @property string $website
 * @property string $hari_kerja
 * @property string $jam_kerja
 * @property string $status
 *
 * @property Lowongan[] $lowongans
 * @property Kelurahan $kelurahan
 * @property User $user
 * @property Industri $industri
 * @property UlasanPerusahaan[] $ulasanPerusahaans
 */
class Perusahaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perusahaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'nama', 'logo', 'id_industri', 'jumlah_karyawan', 'deskripsi', 'alamat', 'id_kelurahan', 'latitude', 'longitude', 'no_telepon', 'email', 'website', 'hari_kerja', 'jam_kerja', 'status'], 'required'],
            [['id_user', 'id_industri', 'jumlah_karyawan', 'id_kelurahan'], 'integer'],
            [['deskripsi', 'alamat', 'status'], 'string'],
            [['nama', 'logo', 'latitude', 'longitude', 'no_telepon', 'email', 'website', 'hari_kerja', 'jam_kerja'], 'string', 'max' => 255],
            [['id_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => Kelurahan::className(), 'targetAttribute' => ['id_kelurahan' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_industri'], 'exist', 'skipOnError' => true, 'targetClass' => Industri::className(), 'targetAttribute' => ['id_industri' => 'id']],
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
            'logo' => 'Logo',
            'id_industri' => 'Id Industri',
            'jumlah_karyawan' => 'Jumlah Karyawan',
            'deskripsi' => 'Deskripsi',
            'alamat' => 'Alamat',
            'id_kelurahan' => 'Id Kelurahan',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'no_telepon' => 'No Telepon',
            'email' => 'Email',
            'website' => 'Website',
            'hari_kerja' => 'Hari Kerja',
            'jam_kerja' => 'Jam Kerja',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowongans()
    {
        return $this->hasMany(Lowongan::className(), ['id_perusahaan' => 'id']);
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndustri()
    {
        return $this->hasOne(Industri::className(), ['id' => 'id_industri']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUlasanPerusahaans()
    {
        return $this->hasMany(UlasanPerusahaan::className(), ['id_perusahaan' => 'id']);
    }
}
