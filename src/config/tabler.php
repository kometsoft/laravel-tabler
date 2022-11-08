<?php

return [

    'layout' => 'tabler::layouts.horizontal.index',

    'logo_path' => false,

    'navbar_links' => [
        [
            'name' => 'Dashboard',
            'icon' => 'home',
            'url' => '/home',
            'active' => 'home',
            'enabled' => true,
        ],
        [
            'name' => 'Item',
            'icon' => 'adjustments',
            'url' => '/item',
            'active' => 'item',
            'enabled' => true,
            'children' => [
                [
                    'name' => 'Sub item',
                    'icon' => 'users',
                    'url' => '/item/sub',
                    'active' => 'item',
                    'enabled' => true,
                ],
            ]
        ],
    ],
];
