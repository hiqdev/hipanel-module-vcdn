<?php

namespace hipanel\modules\vcdn\models;

use hipanel\base\Model;
use hipanel\base\ModelTrait;
use Yii;

class Pullzone extends Model
{
    use ModelTrait;

    public static function tableName(): string
    {
        return '';
    }

    public function rules()
    {
        return [
            [['id'], 'integer'],
        ];
    }

    public function attributeLabels(): array
    {
        return $this->mergeAttributeLabels([
            'id' => Yii::t('hipanel.vcdn', 'ID'),
        ]);
    }
}
