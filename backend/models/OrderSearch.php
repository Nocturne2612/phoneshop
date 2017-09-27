<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DtbOrder;

/**
 * OrderSearch represents the model behind the search form about `backend\models\DtbOrder`.
 */
class OrderSearch extends DtbOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['status', 'customer_id', 'order_name', 'order_email', 'order_tel', 'order_add', 'deliv_name', 'deliv_tel', 'deliv_add', 'create_date', 'update_date', 'memo'], 'safe'],
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
        $query = DtbOrder::find();

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
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'customer_id', $this->customer_id])
            ->andFilterWhere(['like', 'order_name', $this->order_name])
            ->andFilterWhere(['like', 'order_email', $this->order_email])
            ->andFilterWhere(['like', 'order_tel', $this->order_tel])
            ->andFilterWhere(['like', 'order_add', $this->order_add])
            ->andFilterWhere(['like', 'deliv_name', $this->deliv_name])
            ->andFilterWhere(['like', 'deliv_tel', $this->deliv_tel])
            ->andFilterWhere(['like', 'deliv_add', $this->deliv_add])
            ->andFilterWhere(['like', 'memo', $this->memo]);

        return $dataProvider;
    }
}
