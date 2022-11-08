@props([
    'links' => [
        ['label' => 'Foo', 'active' => 'foo', 'url' => '#'],
    ]
])

<ul {!! $attributes->merge(['class' => 'nav nav-bordered']) !!}>
    @foreach ($links as $link)
    <li class="nav-item">
        <a @class(['active'=> (strpos(Route::currentRouteName(), @$link['active']) === 0), 'nav-link']) href="{{ @$link['url'] }}">{{ @$link['label'] }}</a>
    </li>
    @endforeach
</ul>

{{--

<x-tabler::tab :links="[
    ['label' => 'User', 'active' => 'user.index', 'url' => route('user.index')],
]"></x-tabler::tab>

--}}