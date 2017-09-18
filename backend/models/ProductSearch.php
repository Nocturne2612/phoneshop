<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proId', 'catId', 'factoryId', 'price', 'saleOf', 'cpu', 'ram', 'rom', 'pin', 'status', 'dateCreate'], 'integer'],
            [['proName', 'images', 'startSale', 'endSale', 'color', 'screenSize', 'resolution', 'peratingSystem', 'mainCamera', 'secondaryCamera', 'description', 'content'], 'safe'],
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
        $query = Product::find();

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
            'proId' => $this->proId,
            'catId' => $this->catId,
            'factoryId' => $this->factoryId,
            'price' => $this->price,
            'saleOf' => $this->saleOf,
            'startSale' => $this->startSale,
            'endSale' => $this->endSale,
            'cpu' => $this->cpu,
            'ram' => $this->ram,
            'rom' => $this->rom,
            'pin' => $this->pin,
            'status' => $this->status,
            'dateCreate' => $this->dateCreate,
        ]);

        $query->andFilterWhere(['like', 'proName', $this->proName])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'screenSize', $this->screenSize])
            ->andFilterWhere(['like', 'resolution', $this->resolution])
            ->andFilterWhere(['like', 'peratingSystem', $this->peratingSystem])
            ->andFilterWhere(['like', 'mainCamera', $this->mainCamera])
            ->andFilterWhere(['like', 'secondaryCamera', $this->secondaryCamera])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
