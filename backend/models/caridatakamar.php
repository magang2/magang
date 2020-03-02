<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\datakamar;

/**
 * caridatakamar represents the model behind the search form of `app\models\datakamar`.
 */
class caridatakamar extends datakamar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_data_kamar'], 'integer'],
            [['kamar', 'biayasewa', 'gambar'], 'safe'],
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
        $query = datakamar::find();

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
            'id_data_kamar' => $this->id_data_kamar,
        ]);

        $query->andFilterWhere(['like', 'kamar', $this->kamar])
            ->andFilterWhere(['like', 'biayasewa', $this->biayasewa])
            ->andFilterWhere(['like', 'gambar', $this->gambar]);

        return $dataProvider;
    }
}
