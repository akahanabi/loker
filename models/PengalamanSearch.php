<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengalaman;

/**
 * PengalamanSearch represents the model behind the search form of `app\models\Pengalaman`.
 */
class PengalamanSearch extends Pengalaman
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'gaji', 'tahun_mulai', 'tahun_akhir'], 'integer'],
            [['nama_perusahaan', 'posisi', 'sembunyikan_gaji', 'bulan_mulai', 'bulan_akhir', 'tugas_dan_tanggungjawab'], 'safe'],
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
        $query = Pengalaman::find();

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
            'id_user' => $this->id_user,
            'gaji' => $this->gaji,
            'tahun_mulai' => $this->tahun_mulai,
            'tahun_akhir' => $this->tahun_akhir,
        ]);

        $query->andFilterWhere(['like', 'nama_perusahaan', $this->nama_perusahaan])
            ->andFilterWhere(['like', 'posisi', $this->posisi])
            ->andFilterWhere(['like', 'sembunyikan_gaji', $this->sembunyikan_gaji])
            ->andFilterWhere(['like', 'bulan_mulai', $this->bulan_mulai])
            ->andFilterWhere(['like', 'bulan_akhir', $this->bulan_akhir])
            ->andFilterWhere(['like', 'tugas_dan_tanggungjawab', $this->tugas_dan_tanggungjawab]);

        return $dataProvider;
    }
}
