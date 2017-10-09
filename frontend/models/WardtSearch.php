<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ward;

/**
 * WardtSearch represents the model behind the search form about `frontend\models\Ward`.
 */
class WardtSearch extends Ward
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wardid', 'name', 'type', 'location', 'districtid'], 'safe'],
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
        $query = Ward::find();

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
        $query->andFilterWhere(['like', 'wardid', $this->wardid])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'districtid', $this->districtid]);

        return $dataProvider;
    }
}
