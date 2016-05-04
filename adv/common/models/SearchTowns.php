<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Towns;

/**
 * SearchTowns represents the model behind the search form about `common\models\Towns`.
 */
class SearchTowns extends Towns
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid'], 'integer'],
            [['town'], 'safe'],
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
        $query = Towns::find();

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
            'tid' => $this->tid,
        ]);

        $query->andFilterWhere(['like', 'town', $this->town]);

        return $dataProvider;
    }
}
