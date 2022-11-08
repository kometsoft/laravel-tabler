@props(['title' => 'Untitled', 'links' => []])

@section('title', __($title))

<!-- Page header -->
<div {!! $attributes->merge(['class' => 'page-header d-print-none']) !!}>
    <div class="container-xl">
        <div class="row g-2 align-items-center mw-100">
            <div class="col">
                <div class="mb-1">
                    <x-tabler::breadcrumb :links="$links"></x-tabler::breadcrumb>
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

<x-tabler::page-header :title='"$user->name"' :links="array_merge([
    ['route' => route('user.index'), 'name' => __('Users')],
])"></x-tabler::page-header>

--}}