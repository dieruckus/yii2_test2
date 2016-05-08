<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "langs_to_towns".
 *
 * @property integer $id
 * @property integer $tid
 * @property integer $lid
 *
 * @property Towns $t
 * @property Langs $l
 */
class LangsToTowns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'langs_to_towns';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid', 'lid'], 'required'],
            [['tid', 'lid'], 'integer'],
            [['tid'], 'exist', 'skipOnError' => true, 'targetClass' => Towns::className(), 'targetAttribute' => ['tid' => 'tid']],
            [['lid'], 'exist', 'skipOnError' => true, 'targetClass' => Langs::className(), 'targetAttribute' => ['lid' => 'lid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tid' => 'Tid',
            'lid' => 'Lid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getT()
    {
        return $this->hasOne(Towns::className(), ['tid' => 'tid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getL()
    {
        return $this->hasOne(Langs::className(), ['lid' => 'lid']);
    }
}
