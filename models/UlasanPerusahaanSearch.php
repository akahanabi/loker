<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UlasanPerusahaan;

/**
 * UlasanPerusahaanSearch represents the model behind the search form of `app\models\UlasanPerusahaan`.
 */
class UlasanPerusahaanSearch extends UlasanPerusahaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_perusahaan', 'id_user'], 'integer'],
            [['departemen', 'jabatan', 'tipe_pekerjaan', 'status_karyawan', 'lama_bekerja', 'rekomendasikan_teman', 'periode_gaji', 'gaji', 'tunjangan_dan_fasilitas', 'peluang_pengembangan_karir', 'work_life_balance', 'lingkungan_bekerja', 'jajaran_manajemen', 'tingkat_stress'], 'safe'],
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
        $query = UlasanPerusahaan::find();

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
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'departemen', $this->departemen])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'tipe_pekerjaan', $this->tipe_pekerjaan])
            ->andFilterWhere(['like', 'status_karyawan', $this->status_karyawan])
            ->andFilterWhere(['like', 'lama_bekerja', $this->lama_bekerja])
            ->andFilterWhere(['like', 'rekomendasikan_teman', $this->rekomendasikan_teman])
            ->andFilterWhere(['like', 'periode_gaji', $this->periode_gaji])
            ->andFilterWhere(['like', 'gaji', $this->gaji])
            ->andFilterWhere(['like', 'tunjangan_dan_fasilitas', $this->tunjangan_dan_fasilitas])
            ->andFilterWhere(['like', 'peluang_pengembangan_karir', $this->peluang_pengembangan_karir])
            ->andFilterWhere(['like', 'work_life_balance', $this->work_life_balance])
            ->andFilterWhere(['like', 'lingkungan_bekerja', $this->lingkungan_bekerja])
            ->andFilterWhere(['like', 'jajaran_manajemen', $this->jajaran_manajemen])
            ->andFilterWhere(['like', 'tingkat_stress', $this->tingkat_stress]);

        return $dataProvider;
    }
}
