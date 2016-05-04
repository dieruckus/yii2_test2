<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "towns".
 *
 * @property integer $tid
 * @property string $town
 *
 * @property LangsToTowns[] $langsToTowns
 * @property TownsToCountries[] $townsToCountries
 */
class Towns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'towns';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['town'], 'required'],
            [['town'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => 'Tid',
            'town' => 'Town',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLangsToTowns()
    {
        return $this->hasMany(LangsToTowns::className(), ['tid' => 'tid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTownsToCountries()
    {
        return $this->hasMany(TownsToCountries::className(), ['tid' => 'tid']);
    }
}
