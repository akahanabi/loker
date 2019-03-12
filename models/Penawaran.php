<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penawaran".
 *
 * @property int $id
 * @property int $id_lowongan
 * @property int $id_user
 * @property string $pesan
 *
 * @property Lowongan $lowongan
 * @property User $user
 */
class Penawaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penawaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lowongan', 'id_user', 'pesan'], 'required'],
            [['id_lowongan', 'id_user'], 'integer'],
            [['pesan'], 'string'],
            [['id_lowongan'], 'exist', 'skipOnError' => true, 'targetClass' => Lowongan::className(), 'targetAttribute' => ['id_lowongan' => 'id']],
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
            'id_lowongan' => 'Id Lowongan',
            'id_user' => 'Id User',
            'pesan' => 'Pesan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowongan()
    {
        return $this->hasOne(Lowongan::className(), ['id' => 'id_lowongan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
