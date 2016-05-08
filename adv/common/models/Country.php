<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "countries".
 *
 * @property integer $cid
 * @property string $country
 *
 * @property TownsToCountries[] $townsToCountries
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'countries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country'], 'required'],
            [['country'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'country' => 'Country',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTownsToCountries()
    {
        return $this->hasMany(TownsToCountries::className(), ['cid' => 'cid']);
    }

    public function getTowns()
    {
        return $this->hasMany(Town::className(), ['tid' => 'tid'])
            ->via('townsToCountries');
    }
}
