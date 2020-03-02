<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_pelanggan".
 *
 * @property int $id_pelanggan
 * @property string $nama_pelanggan
 * @property string $jenis_kelamin
 * @property int $usia
 * @property string $alamat
 * @property string $pekerjaan
 *
 * @property DataTransaksi[] $dataTransaksis
 */
class DataPelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pelanggan', 'jenis_kelamin', 'usia', 'alamat', 'pekerjaan'], 'required'],
            [['usia'], 'integer'],
            [['alamat'], 'string'],
            [['nama_pelanggan', 'jenis_kelamin', 'pekerjaan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pelanggan' => 'Id Pelanggan',
            'nama_pelanggan' => 'Nama Pelanggan',
            'jenis_kelamin' => 'Jenis Kelamin',
            'usia' => 'Usia',
            'alamat' => 'Alamat',
            'pekerjaan' => 'Pekerjaan',
        ];
    }

    /**
     * Gets query for [[DataTransaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTransaksis()
    {
        return $this->hasMany(DataTransaksi::className(), ['id_pelanggan' => 'id_pelanggan']);
    }
}
