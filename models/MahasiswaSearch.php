<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mahasiswa;

/**
 * MahasiswaSearch represents the model behind the search form of `app\models\Mahasiswa`.
 */
class MahasiswaSearch extends Mahasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama', 'tempat_lahir', 'tgl_lahir', 'alamat', 'no_hp', 'asal_sekolah', 'n_ayah', 'n_ibu', 'foto', 'nim', 'kewarganegaraan', 'agama', 'alamat_ortu', 'nohp_ortu'], 'safe'],
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
        $query = Mahasiswa::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'no_hp' => $this->no_hp,
        ]);

        $query->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'asal_sekolah', $this->asal_sekolah])
            ->andFilterWhere(['ilike', 'n_ayah', $this->n_ayah])
            ->andFilterWhere(['ilike', 'n_ibu', $this->n_ibu])
            ->andFilterWhere(['ilike', 'foto', $this->foto])
            ->andFilterWhere(['ilike', 'nim', $this->nim])
            ->andFilterWhere(['ilike', 'kewarganegaraan', $this->kewarganegaraan])
            ->andFilterWhere(['ilike', 'agama', $this->agama])
            ->andFilterWhere(['ilike', 'alamat_ortu', $this->alamat_ortu])
            ->andFilterWhere(['ilike', 'nohp_ortu', $this->nohp_ortu]);

        return $dataProvider;
    }
}
