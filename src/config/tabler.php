<?php

return [

    'layout' => [
        'app' => 'tabler::layouts.horizontal.index',
        'guest' => 'tabler::layouts.guest'
    ],
    'logo_path' => false,
    'navbar_links' => [
        [
            'name' => 'Dashboard',
            'icon' => 'home',
            'url' => '/home',
            'active' => request()->routeIs('home'),
            'enabled' => true,
        ],
        [
            'name' => 'Item',
            'icon' => 'adjustments',
            'url' => '/item',
            'active' => false,
            'enabled' => true,
            'children' => [
                [
                    'name' => 'Sub item',
                    'icon' => 'adjustments',
                    'url' => '/item/sub',
                    'active' => false,
                    'enabled' => true,
                ],
            ]
        ],
    ],
];
