@if(session('success'))
<x-tabler::toast color="success" title="Success!" :message="session('success')"></x-tabler::toast>
@endif
@if(session('status'))
<x-tabler::toast color="primary" title="Info!" :message="session('status')"></x-tabler::toast>
@endif
@if(session('error'))
<x-tabler::toast color="danger" title="Error!" :message="session('error')"></x-tabler::toast>
@endif
@if($errors->count())
<x-tabler::toast color="danger" title="Error!" :message="session('error')">
    <ul class="list-unstyled mb-0">
        @foreach($errors->all() as $error)
        <li><i class="ti ti-x icon me-1 text-danger"></i>{{ $error }}</li>
        @endforeach
    </ul>
</x-tabler::toast>
@endif