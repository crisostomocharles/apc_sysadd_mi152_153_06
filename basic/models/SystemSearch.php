<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\System;

/**
 * SystemSearch represents the model behind the search form about `app\models\System`.
 */
class SystemSearch extends System
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'employee_number', 'room_number'], 'integer'],
            [['employee_name', 'room_type', 'hoover_carpet', 'clean_tub', 'change_bedsheet', 'replenish_supplies'], 'safe'],
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
        $query = System::find();

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
            'employee_id' => $this->employee_id,
            'employee_number' => $this->employee_number,
            'room_number' => $this->room_number,
        ]);

        $query->andFilterWhere(['like', 'employee_name', $this->employee_name])
            ->andFilterWhere(['like', 'room_type', $this->room_type])
            ->andFilterWhere(['like', 'hoover_carpet', $this->hoover_carpet])
            ->andFilterWhere(['like', 'clean_tub', $this->clean_tub])
            ->andFilterWhere(['like', 'change_bedsheet', $this->change_bedsheet])
            ->andFilterWhere(['like', 'replenish_supplies', $this->replenish_supplies]);

        return $dataProvider;
    }
}
