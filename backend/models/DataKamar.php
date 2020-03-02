<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_kamar".
 *
 * @property int $id_data_kamar
 * @property string $kamar
 * @property string $biayasewa
 * @property string $gambar
 *
 * @property DataTransaksi[] $dataTransaksis
 */
class DataKamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kamar', 'biayasewa', 'gambar'], 'required'],
            [['gambar'], 'string'],
            [['kamar', 'biayasewa'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_data_kamar' => 'Id Data Kamar',
            'kamar' => 'Kamar',
            'biayasewa' => 'Biayasewa',
            'gambar' => 'Gambar',
        ];
    }

    /**
     * Gets query for [[DataTransaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTransaksis()
    {
        return $this->hasMany(DataTransaksi::className(), ['id_data_kamar' => 'id_data_kamar']);
    }
}
