@extends(config('tabler.layout.app'))

@section('header')
<x-tabler::page-header title="Dashboard"></x-tabler::page-header>
@endsection

@section('content')
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @lang('tabler::general.you_are_logged_in')
            </div>
        </div>
    </div>
</div>
@endsection