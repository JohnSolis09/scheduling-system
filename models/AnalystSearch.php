<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Analyst;

/**
 * AnalystSearch represents the model behind the search form of `app\models\Analyst`.
 */
class AnalystSearch extends Analyst
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'request_id', 'facility_id', 'location_id', 'archive', 'sched_status', 'status'], 'integer'],
            [['no_of_pax', 'approved_by', 'approve_at'], 'safe'],
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
        $query = Analyst::find();

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
            'user_id' => $this->user_id,
            'request_id' => $this->request_id,
            'facility_id' => $this->facility_id,
            'location_id' => $this->location_id,
            'archive' => $this->archive,
            'sched_status' => $this->sched_status,
            'status' => $this->status,
            'approved_by' => $this->approved_by,
            'approve_at' => $this->approve_at,
        ]);

        $query->andFilterWhere(['like', 'no_of_pax', $this->no_of_pax]);

        return $dataProvider;
    }
}
