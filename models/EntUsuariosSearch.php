<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EntUsuarios;

/**
 * EntUsuariosSearch represents the model behind the search form of `app\models\EntUsuarios`.
 */
class EntUsuariosSearch extends EntUsuarios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_usuario', 'num_edad', 'num_pelotas', 'b_aceptar_terminos'], 'integer'],
            [['txt_nombre_completo', 'txt_token', 'txt_telefono_celular', 'txt_cp', 'txt_email', 'txt_codigo_promocion', 'fch_creacion', 'txt_codigo_compra', 'txt_colonia', 'txt_sitio_compra', 'txt_codito_usuario'], 'safe'],
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
        $query = EntUsuarios::find();

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
            'id_usuario' => $this->id_usuario,
            'num_edad' => $this->num_edad,
            'num_pelotas' => $this->num_pelotas,
            'fch_creacion' => $this->fch_creacion,
            'b_aceptar_terminos' => $this->b_aceptar_terminos,
        ]);

        $query->andFilterWhere(['like', 'txt_nombre_completo', $this->txt_nombre_completo])
            ->andFilterWhere(['like', 'txt_token', $this->txt_token])
            ->andFilterWhere(['like', 'txt_telefono_celular', $this->txt_telefono_celular])
            ->andFilterWhere(['like', 'txt_cp', $this->txt_cp])
            ->andFilterWhere(['like', 'txt_email', $this->txt_email])
            ->andFilterWhere(['like', 'txt_codigo_promocion', $this->txt_codigo_promocion])
            ->andFilterWhere(['like', 'txt_codigo_compra', $this->txt_codigo_compra])
            ->andFilterWhere(['like', 'txt_colonia', $this->txt_colonia])
            ->andFilterWhere(['like', 'txt_sitio_compra', $this->txt_sitio_compra])
            ->andFilterWhere(['like', 'txt_codito_usuario', $this->txt_codito_usuario]);

        return $dataProvider;
    }
}
