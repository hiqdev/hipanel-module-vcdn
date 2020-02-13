<?php

namespace hipanel\modules\vcdn\menus;

use hiqdev\yii2\menus\Menu;
use Yii;

class SidebarMenu extends Menu
{
    public function items(): array
    {
        return [
            'vcdn' => [
                'label' => Yii::t('hipanel', 'Video CDN'),
                'url' => ['@pullzone'],
                'icon' => 'fa-video-camera',
                'items' => [
                    'pullzone' => [
                        'label' => Yii::t('hipanel.vcdn', 'Pull zone'),
                        'url' => ['@pullzone'],
                    ],
                ],
            ],
        ];
    }
}
