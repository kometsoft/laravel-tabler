@extends(config('tabler.layout'))

@section('header')
<x-tabler::page-header title="Dashboard"></x-tabler::page-header>
@endsection

@section('content')
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @lang('You are logged in!')
            </div>
        </div>
    </div>
</div>
@endsection