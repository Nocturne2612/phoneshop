<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrderDetail;

/**
 * OrderDetailSearch represents the model behind the search form about `backend\models\OrderDetail`.
 */
class OrderDetailSearch extends OrderDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idOrderDetails', 'productId', 'quantity', 'status', 'order_id', 'created_at', 'updated_at'], 'integer'],
            [['productName', 'image', 'color'], 'safe'],
            [['price', 'totalMoney'], 'number'],
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
        $query = OrderDetail::find();

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
            'idOrderDetails' => $this->idOrderDetails,
            'productId' => $this->productId,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'totalMoney' => $this->totalMoney,
            'status' => $this->status,
            'order_id' => $this->order_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'productName', $this->productName])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'color', $this->color]);

        return $dataProvider;
    }
}
