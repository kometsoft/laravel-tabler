<ul class="list-inline list-inline-dots mb-0 text-muted">
    @if(isset($route['show']))
    <li class="list-inline-item">
        <a href="{{ $route['show'] }}" class="link-primary text-decoration-none">
            <i class="ti ti-eye"></i> @lang('tabler::action.view')
        </a>
    </li>
    @endif
    @if(isset($route['edit']))
    <li class="list-inline-item">
        <a href="{{ $route['edit'] }}" class="link-primary text-decoration-none">
            <i class="ti ti-pencil"></i> @lang('tabler::action.edit')
        </a>
    </li>
    @endif
    @if(isset($route['destroy']))
    <li class="list-inline-item">
        <button type="button" onclick="deleteRow('{{ $id }}', '{{ $route['destroy'] }}')"
            class="link-primary text-decoration-none">
            <i class="ti ti-trash"></i> @lang('tabler::action.delete')
        </button>
    </li>
    @endif
</ul>