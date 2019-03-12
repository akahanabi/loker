<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "industri".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Perusahaan[] $perusahaans
 */
class Industri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'industri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerusahaans()
    {
        return $this->hasMany(Perusahaan::className(), ['id_industri' => 'id']);
    }
}
