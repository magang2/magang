<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_transaksi".
 *
 * @property int $id_transaksi
 * @property int $id_pelanggan
 * @property int $id_data_kamar
 * @property string $tanggal_checkin
 * @property string $tanggal_checkout
 * @property string $totalbiaya
 *
 * @property DataPelanggan $pelanggan
 * @property DataKamar $dataKamar
 */
class DataTransaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pelanggan', 'id_data_kamar', 'tanggal_checkin', 'tanggal_checkout', 'totalbiaya'], 'required'],
            [['id_pelanggan', 'id_data_kamar'], 'integer'],
            [['tanggal_checkin', 'tanggal_checkout'], 'safe'],
            [['totalbiaya'], 'string', 'max' => 100],
            [['id_pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => DataPelanggan::className(), 'targetAttribute' => ['id_pelanggan' => 'id_pelanggan']],
            [['id_data_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => DataKamar::className(), 'targetAttribute' => ['id_data_kamar' => 'id_data_kamar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'id_pelanggan' => 'Id Pelanggan',
            'id_data_kamar' => 'Id Data Kamar',
            'tanggal_checkin' => 'Tanggal Checkin',
            'tanggal_checkout' => 'Tanggal Checkout',
            'totalbiaya' => 'Totalbiaya',
        ];
    }

    /**
     * Gets query for [[Pelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(DataPelanggan::className(), ['id_pelanggan' => 'id_pelanggan']);
    }

    /**
     * Gets query for [[DataKamar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataKamar()
    {
        return $this->hasOne(DataKamar::className(), ['id_data_kamar' => 'id_data_kamar']);
    }
}
