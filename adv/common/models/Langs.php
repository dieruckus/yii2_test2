<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "langs".
 *
 * @property integer $lid
 * @property string $lang
 *
 * @property LangsToTowns[] $langsToTowns
 */
class Langs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'langs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lang'], 'required'],
            [['lang'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lid' => 'Lid',
            'lang' => 'Lang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLangsToTowns()
    {
        return $this->hasMany(LangsToTowns::className(), ['lid' => 'lid']);
    }
}
