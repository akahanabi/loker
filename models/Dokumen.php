<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dokumen".
 *
 * @property int $id
 * @property int $id_user
 * @property string $label
 * @property string $tipe_dokumen
 * @property string $file
 *
 * @property User $user
 */
class Dokumen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokumen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'label', 'tipe_dokumen', 'file'], 'required'],
            [['id_user'], 'integer'],
            [['tipe_dokumen'], 'string'],
            [['label', 'file'], 'string', 'max' => 255],
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
            'label' => 'Label',
            'tipe_dokumen' => 'Tipe Dokumen',
            'file' => 'File',
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
