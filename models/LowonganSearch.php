<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lowongan;

/**
 * LowonganSearch represents the model behind the search form of `app\models\Lowongan`.
 */
class LowonganSearch extends Lowongan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_perusahaan', 'gaji', 'id_pendidikan', 'id_kelurahan'], 'integer'],
            [['judul', 'posisi', 'tipe_pekerjaan', 'pengalaman', 'lokasi_kerja', 'latitude', 'longitude', 'deskripsi_pekerjaan', 'persyaratan', 'tanggal_posting', 'tanggal_ditutup', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Lowongan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_perusahaan' => $this->id_perusahaan,
            'gaji' => $this->gaji,
            'id_pendidikan' => $this->id_pendidikan,
            'id_kelurahan' => $this->id_kelurahan,
            'tanggal_posting' => $this->tanggal_posting,
            'tanggal_ditutup' => $this->tanggal_ditutup,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'posisi', $this->posisi])
            ->andFilterWhere(['like', 'tipe_pekerjaan', $this->tipe_pekerjaan])
            ->andFilterWhere(['like', 'pengalaman', $this->pengalaman])
            ->andFilterWhere(['like', 'lokasi_kerja', $this->lokasi_kerja])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'deskripsi_pekerjaan', $this->deskripsi_pekerjaan])
            ->andFilterWhere(['like', 'persyaratan', $this->persyaratan])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
