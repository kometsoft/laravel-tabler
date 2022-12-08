<?php

return [
    'logo_path' => 'https://preview.tabler.io/static/logo.svg',
    'layout' => [
        'app' => 'tabler::layouts.horizontal.index',
        'guest' => 'tabler::layouts.guest',
        'includes' => [
            'header' => 'tabler::layouts.horizontal.header',
            'navbar' => 'tabler::layouts.horizontal.navbar',
            'footer' => 'tabler::layouts.horizontal.footer',
        ]
    ],
    'navbar_links' => [
        [
            'name' => 'Dashboard',
            'icon' => 'home',
            'url' => '/home',
            'active' => 'home', // request()->routeIs('home')
            'enabled' => true,
        ],
        [
            'name' => 'Item',
            'icon' => 'adjustments',
            'url' => '#',
            'active' => '',
            'enabled' => true,
            'children' => [
                [
                    'name' => 'Sub item',
                    'icon' => 'adjustments',
                    'url' => '#',
                    'active' => '',
                    'enabled' => true,
                ],
            ]
        ],
    ],
];
