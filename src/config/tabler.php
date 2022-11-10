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
            'active' => true, // request()->routeIs('home')
            'enabled' => true,
        ],
        [
            'name' => 'Item',
            'icon' => 'adjustments',
            'url' => '#',
            'active' => false,
            'enabled' => true,
            'children' => [
                [
                    'name' => 'Sub item',
                    'icon' => 'adjustments',
                    'url' => '#',
                    'active' => false,
                    'enabled' => true,
                ],
            ]
        ],
    ],
];
