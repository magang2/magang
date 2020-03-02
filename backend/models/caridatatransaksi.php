<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\datatransaksi;

/**
 * caridatatransaksi represents the model behind the search form of `app\models\datatransaksi`.
 */
class caridatatransaksi extends datatransaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'id_pelanggan', 'id_data_kamar'], 'integer'],
            [['tanggal_checkin', 'tanggal_checkout', 'totalbiaya'], 'safe'],
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
        $query = datatransaksi::find();

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
            'id_transaksi' => $this->id_transaksi,
            'id_pelanggan' => $this->id_pelanggan,
            'id_data_kamar' => $this->id_data_kamar,
            'tanggal_checkin' => $this->tanggal_checkin,
            'tanggal_checkout' => $this->tanggal_checkout,
        ]);

        $query->andFilterWhere(['like', 'totalbiaya', $this->totalbiaya]);

        return $dataProvider;
    }
}
