<?php
namespace backend\modules\auth\models\AdminCrud;

use backend\models\BackUser;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class AdminCrudSearch extends BackUser
{
    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'role', 'status'], 'integer'],
            [['username', 'created_at'], 'safe'],
        ];
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
        $query = BackUser::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

//        $query->andFilterWhere([
//            'id' => $this->id,
//            'category_id' => $this->category_id,
//            'price' => $this->price,
//        ]);
//
//        $query->andFilterWhere(['like', 'title', $this->title])
//            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
