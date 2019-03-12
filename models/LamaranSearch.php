<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lamaran;

/**
 * LamaranSearch represents the model behind the search form of `app\models\Lamaran`.
 */
class LamaranSearch extends Lamaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_lowongan', 'harapan_gaji', 'pesan_panggilan_wawancara'], 'integer'],
            [['tanggal', 'pesan_user_melamar', 'status'], 'safe'],
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
        $query = Lamaran::find();

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
            'id_lowongan' => $this->id_lowongan,
            'tanggal' => $this->tanggal,
            'harapan_gaji' => $this->harapan_gaji,
            'pesan_panggilan_wawancara' => $this->pesan_panggilan_wawancara,
        ]);

        $query->andFilterWhere(['like', 'pesan_user_melamar', $this->pesan_user_melamar])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
