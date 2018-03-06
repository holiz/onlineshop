<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property int $id_jurusan
 * @property string $nama_jurusan 
 * @property string $setatus
 * @property string $penangungjawab
 *
 * @property Mahasiswa $mahasiswa
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_jurusan ', 'setatus', 'penangungjawab'], 'required'],
            [['nama_jurusan ', 'setatus', 'penangungjawab'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jurusan' => 'Id Jurusan',
            'nama_jurusan ' => 'Nama Jurusan',
            'setatus' => 'Setatus',
            'penangungjawab' => 'Penangungjawab',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa()
    {
        return $this->hasOne(Mahasiswa::className(), ['id' => 'id_jurusan']);
    }
}
