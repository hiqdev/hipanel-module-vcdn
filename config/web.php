<?php

use hipanel\modules\vcdn\menus\SidebarMenu;
use hipanel\modules\vcdn\Module;
use hiqdev\thememanager\menus\AbstractSidebarMenu;
use yii\i18n\PhpMessageSource;

return [
    'aliases' => [
        '@pullzone' => '/vcdn/pullzone',
    ],
    'modules' => [
        'vcdn' => [
            'class' => Module::class,
        ],
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                'hipanel.vcdn' => [
                    'class' => PhpMessageSource::class,
                    'basePath' => '@hipanel/modules/vcdn/messages',
                ],
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            AbstractSidebarMenu::class => [
                'add' => [
                    'vcdn' => [
                        'menu' => [
                            'class' => SidebarMenu::class,
                        ],
                        'where' => [
                            'after' => ['stock', 'server', 'hosting', 'domain', 'client'],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
