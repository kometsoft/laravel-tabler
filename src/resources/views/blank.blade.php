@extends(config('tabler.layout'))

@section('header')
<x-tabler::page-header title="Untitled">
    <div class="btn-list">
        <x-tabler::button href="#" class="btn btn-primary" icon="plus" label="Create"></x-tabler::button>
    </div>
</x-page-header>
@endsection

@section('content')
<div class="row row-cards">
    <div class="col-md-12">
    </div>
</div>
@endsection