@extends(config('laravel-tabler.layout.app'))

@section('header')
<x-tab::page-header title="Dashboard"></x-tab::page-header>
@endsection

@section('content')
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @lang('Hi :name, you are logged in!', ['name' => auth()->user()->name])
            </div>
        </div>
    </div>
</div>
@endsection