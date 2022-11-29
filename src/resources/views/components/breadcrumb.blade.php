@props(['links' => [], 'show_home' => true])

<nav {!! $attributes->merge(['class' => '']) !!}>
    <ol class="breadcrumb">
        @if(Route::currentRouteName() !== 'home' && $show_home)
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">@lang('Dashboard')</a>
        </li>
        @endif
        @foreach($links as $link)
        @if(! empty($link))
        <li class="breadcrumb-item">
            @php
                $icon = (data_get($link, 'icon')) ? '<i class="pe-1 ' . data_get($link, 'icon') . '"></i>' : '';
            @endphp
            @if (data_get($link, 'route'))
                <a href="{{ data_get($link, 'route') }}">{!! $icon !!}{{ __(data_get($link, 'name')) }}</a>
            @else
                <span class="text-muted">{!! $icon !!}{{ __(data_get($link, 'name')) }}</span>
            @endif
        </li>
        @endif
        @endforeach
    </ol>
</nav>

{{-- 

<x-tabler::breadcrumb :links="array_merge([
    ['route' => route('user.index'), 'name' => __('Users')],
    ($user->exists ? ['route' => route('user.show', $user), 'name' => $user->name] : []),
])"></x-tabler::breadcrumb>

--}}
