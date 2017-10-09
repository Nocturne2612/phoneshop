<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Order;

/**
 * OrderSearch represents the model behind the search form about `frontend\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idOrder', 'province_id', 'district_id', 'ward_id', 'paymen_id', 'userId', 'status', 'created_at', 'updated_at'], 'integer'],
            [['fullName', 'name', 'address', 'phone', 'email', 'otherInformation'], 'safe'],
            [['totalMoney'], 'number'],
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
        $query = Order::find();

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
            'idOrder' => $this->idOrder,
            'province_id' => $this->province_id,
            'district_id' => $this->district_id,
            'ward_id' => $this->ward_id,
            'totalMoney' => $this->totalMoney,
            'paymen_id' => $this->paymen_id,
            'userId' => $this->userId,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fullName', $this->fullName])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'otherInformation', $this->otherInformation]);

        return $dataProvider;
    }
}
