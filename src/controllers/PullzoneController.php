<?php

namespace hipanel\modules\vcdn\controllers;

use hipanel\actions\IndexAction;
use hipanel\actions\SmartCreateAction;
use hipanel\actions\SmartDeleteAction;
use hipanel\actions\SmartUpdateAction;
use hipanel\actions\ViewAction;
use hipanel\base\CrudController;
use Yii;

class PullzoneController extends CrudController
{
    public function actions(): array
    {
        return array_merge(parent::actions(), [
            'index' => [
                'class' => IndexAction::class,
            ],
            'view' => [
                'class' => ViewAction::class,
            ],
            'create' => [
                'class' => SmartCreateAction::class,
                'success' => Yii::t('hipanel.vcdn', 'The item has been created'),
                'error' => Yii::t('hipanel.vcdn', 'An error'),
            ],
            'update' => [
                'class' => SmartUpdateAction::class,
                'success' => Yii::t('hipanel.vcdn', 'The item has been updated'),
                'error' => Yii::t('hipanel.vcdn', 'An error'),
            ],
            'delete' => [
                'class' => SmartDeleteAction::class,
                'success' => Yii::t('hipanel.vcdn', 'The item(s) deleted'),
                'error' => Yii::t('hipanel.vcdn', 'An error'),
            ],
        ]);
    }
}
