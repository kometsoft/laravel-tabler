@if(session('success'))
<x-tab::toast color="success" title="Success!" :message="session('success')"></x-tab::toast>
@endif
@if(session('status'))
<x-tab::toast color="primary" title="Info!" :message="session('status')"></x-tab::toast>
@endif
@if(session('error'))
<x-tab::toast color="danger" title="Error!" :message="session('error')"></x-tab::toast>
@endif
@if($errors->count())
<x-tab::toast color="danger" title="Error!" :message="session('error')">
    <ul class="list-unstyled mb-0">
        @foreach($errors->all() as $error)
        <li><i class="ti ti-x icon me-1 text-danger"></i>{{ $error }}</li>
        @endforeach
    </ul>
</x-tab::toast>
@endif