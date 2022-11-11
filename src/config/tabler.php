<?php

return [
    'logo_path' => false,
    'layout' => [
        'app' => 'tabler::layouts.horizontal.index',
        'guest' => 'tabler::layouts.guest'
    ],
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
