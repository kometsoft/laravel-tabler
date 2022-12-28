@props(['links' => [], 'home' => true])

<nav {!! $attributes->merge(['class' => '']) !!}>
    <ol class="breadcrumb">
        @if ($home)
            @if (Route::currentRouteName() !== 'home')
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">@lang('Dashboard')</a>
            </li>
            @endif
        @endif
        @foreach ($links as $link)
        @if (! empty($link))
        <li class="breadcrumb-item">
            <a href="{{ isset($link['route']) ? $link['route'] : '#' }}">
                @lang(isset($link['name']) ? $link['name'] : '')
            </a>
        </li>
        @endif
        @endforeach
    </ol>
</nav>


{{-- 

<x-tab::breadcrumb :links="array_merge([
    ['route' => route('user.index'), 'name' => __('Users')],
    ($user->exists ? ['route' => route('user.show', $user), 'name' => $user->name] : []),
])"></x-tab::breadcrumb>

--}}
