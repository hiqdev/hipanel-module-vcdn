<?php

namespace hipanel\modules\vcdn\grid;

use hipanel\grid\BoxedGridView;

class PullzoneGridView extends BoxedGridView
{
    public function columns(): array
    {
        return array_merge(parent::columns(), [
            'id' => [
                'format' => 'raw',
            ],
        ]);
    }
}
