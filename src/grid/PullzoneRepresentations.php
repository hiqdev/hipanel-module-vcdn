<?php

namespace hipanel\modules\vcdn\grid;

use hiqdev\higrid\representations\RepresentationCollection;
use Yii;


class PullzoneRepresentations extends RepresentationCollection
{

    protected function fillRepresentations(): void
    {
        $this->representations = array_filter([
            'common' => [
                'label' => Yii::t('hipanel', 'common'),
                'columns' => [
                    'checkbox',
                    'id',
                ],
            ],
        ]);
    }
}
