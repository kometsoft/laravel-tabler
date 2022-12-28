@props(['title' => 'Untitled', 'links' => [], 'show_home' => true])

@section('title', __($title))

<!-- Page header -->
<div {!! $attributes->merge(['class' => 'page-header d-print-none']) !!}>
    <div class="container-xl">
        <div class="row g-2 align-items-center mw-100">
            <div class="col">
                <div class="mb-1">
                    <x-tab::breadcrumb :show_home="$show_home" :links="$links"></x-tab::breadcrumb>
                </div>
                <h2 class="page-title">
                    <span class="text-truncate">@lang($title)</span>
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-12 col-md-auto ms-auto d-print-none">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

{{--

<x-tab::page-header :title='"$user->name"' :links="array_merge([
    ['route' => route('user.index'), 'name' => __('Users')],
])"></x-tab::page-header>

--}}