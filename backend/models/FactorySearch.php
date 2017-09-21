<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Factory;

/**
 * FactorySearch represents the model behind the search form about `backend\models\Factory`.
 */
class FactorySearch extends Factory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['facId', 'status', 'dateCreate'], 'integer'],
            [['facName', 'logo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Factory::find();

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
            'facId' => $this->facId,
            'status' => $this->status,
            'dateCreate' => $this->dateCreate,
        ]);

        $query->andFilterWhere(['like', 'facName', $this->facName])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
