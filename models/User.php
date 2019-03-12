<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $no_rumah
 * @property string $no_hp
 * @property string $website
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $status
 * @property string $alamat
 * @property int $id_kelurahan
 * @property string $kewarganegaraan
 * @property string $sedang_mencari_pekerjaan
 *
 * @property Bahasa[] $bahasas
 * @property Dokumen[] $dokumens
 * @property Lamaran[] $lamarans
 * @property Organisasi[] $organisasis
 * @property Penawaran[] $penawarans
 * @property Pengalaman[] $pengalamen
 * @property Perusahaan[] $perusahaans
 * @property RiwayatPendidikan[] $riwayatPendidikans
 * @property Sertifikasi[] $sertifikasis
 * @property UlasanPerusahaan[] $ulasanPerusahaans
 * @property Kelurahan $kelurahan
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
    public function rules()
    {
        return [
            [['nama', 'email', 'username', 'password', 'no_hp', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'status', 'alamat', 'id_kelurahan', 'kewarganegaraan', 'sedang_mencari_pekerjaan'], 'required'],
            [['jenis_kelamin', 'status', 'alamat', 'sedang_mencari_pekerjaan'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['id_kelurahan'], 'integer'],
            [['nama', 'email', 'username', 'password', 'no_rumah', 'no_hp', 'website', 'tempat_lahir', 'kewarganegaraan'], 'string', 'max' => 255],
            [['id_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => Kelurahan::className(), 'targetAttribute' => ['id_kelurahan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'no_rumah' => 'No Rumah',
            'no_hp' => 'No Hp',
            'website' => 'Website',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'status' => 'Status',
            'alamat' => 'Alamat',
            'id_kelurahan' => 'Id Kelurahan',
            'kewarganegaraan' => 'Kewarganegaraan',
            'sedang_mencari_pekerjaan' => 'Sedang Mencari Pekerjaan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBahasas()
    {
        return $this->hasMany(Bahasa::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDokumens()
    {
        return $this->hasMany(Dokumen::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLamarans()
    {
        return $this->hasMany(Lamaran::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganisasis()
    {
        return $this->hasMany(Organisasi::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenawarans()
    {
        return $this->hasMany(Penawaran::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengalamen()
    {
        return $this->hasMany(Pengalaman::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerusahaans()
    {
        return $this->hasMany(Perusahaan::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPendidikans()
    {
        return $this->hasMany(RiwayatPendidikan::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSertifikasis()
    {
        return $this->hasMany(Sertifikasi::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUlasanPerusahaans()
    {
        return $this->hasMany(UlasanPerusahaan::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelurahan()
    {
        return $this->hasOne(Kelurahan::className(), ['id' => 'id_kelurahan']);
    }
}
