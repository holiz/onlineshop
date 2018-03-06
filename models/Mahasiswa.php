<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $no_hp
 * @property string $asal_sekolah
 * @property string $n_ayah
 * @property string $n_ibu
 * @property string $foto
 * @property string $nim
 * @property string $kewarganegaraan
 * @property string $agama
 * @property string $alamat_ortu
 * @property string $nohp_ortu
 *
 * @property Jurusan $id0
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'tempat_lahir', 'tgl_lahir', 'alamat', 'no_hp', 'asal_sekolah', 'n_ayah', 'n_ibu', 'foto', 'nim', 'kewarganegaraan', 'agama', 'alamat_ortu', 'nohp_ortu'], 'required'],
            [['nama', 'tempat_lahir', 'alamat', 'asal_sekolah', 'n_ayah', 'n_ibu', 'foto', 'nim', 'kewarganegaraan', 'agama', 'alamat_ortu', 'nohp_ortu'], 'string'],
            [['tgl_lahir', 'no_hp'], 'safe'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id' => 'id_jurusan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tangal Lahir',
            'alamat' => 'Alamat',
            'no_hp' => 'Nomor Hp',
            'asal_sekolah' => 'Asal Sekolah',
            'n_ayah' => 'Nama Ayah',
            'n_ibu' => 'Nama Ibu',
            'foto' => 'Foto',
            'nim' => 'NIM',
            'kewarganegaraan' => 'Kewarganegaraan',
            'agama' => 'Agama',
            'alamat_ortu' => 'Alamat Ortu',
            'nohp_ortu' => 'Nomor hp Ortu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Jurusan::className(), ['id_jurusan' => 'id']);
    }
}
