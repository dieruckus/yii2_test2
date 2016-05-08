<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "towns_to_countries".
 *
 * @property integer $tid
 * @property integer $cid
 *
 * @property Countries $c
 * @property Towns $t
 */
class TownsToCountries extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'towns_to_countries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid', 'cid'], 'required'],
            [['tid', 'cid'], 'integer'],
            [['cid'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['cid' => 'cid']],
            [['tid'], 'exist', 'skipOnError' => true, 'targetClass' => Towns::className(), 'targetAttribute' => ['tid' => 'tid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => 'Tid',
            'cid' => 'Cid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getC()
    {
        return $this->hasOne(Countries::className(), ['cid' => 'cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getT()
    {
        return $this->hasOne(Towns::className(), ['tid' => 'tid']);
    }
}
