<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "lamaran".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_lowongan
 * @property string $tanggal
 * @property int $harapan_gaji
 * @property string $pesan_user_melamar
 * @property int $pesan_panggilan_wawancara
 * @property string $status
 *
 * @property User $user
 * @property Lowongan $lowongan
 */
class Lamaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lamaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_lowongan', 'tanggal', 'status'], 'required'],
            [['id_user', 'id_lowongan', 'harapan_gaji', 'pesan_panggilan_wawancara'], 'integer'],
            [['tanggal'], 'safe'],
            [['pesan_user_melamar', 'status'], 'string'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_lowongan'], 'exist', 'skipOnError' => true, 'targetClass' => Lowongan::className(), 'targetAttribute' => ['id_lowongan' => 'id']],
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
            'id_user' => 'Id User',
            'id_lowongan' => 'Id Lowongan',
            'tanggal' => 'Tanggal',
            'harapan_gaji' => 'Harapan Gaji',
            'pesan_user_melamar' => 'Pesan User Melamar',
            'pesan_panggilan_wawancara' => 'Pesan Panggilan Wawancara',
            'status' => 'Status',
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
    public function getLowongan()
    {
        return $this->hasOne(Lowongan::className(), ['id' => 'id_lowongan']);
    }
    public function behaviors(){
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'id_lowongan',
                //'slugAttribute' => 'slug'
            ],
        ];
    }
}
