<?php

namespace hipanel\modules\vcdn\models;

use hipanel\base\SearchModelTrait;
use hipanel\helpers\ArrayHelper;
use Yii;

class PullzoneSearch extends Pullzone
{
    use SearchModelTrait {
        searchAttributes as defaultSearchAttributes;
    }

    public function searchAttributes(): array
    {
        return ArrayHelper::merge($this->defaultSearchAttributes(), []);
    }

    public function attributeLabels(): array
    {
        return array_merge(parent::attributeLabels(), [
            'id' => Yii::t('hipanel.vcdn', 'ID'),
        ]);
    }
}
