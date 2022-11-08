<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    @if (config('tabler.navbar_links'))
                    @foreach (config('tabler.navbar_links') as $link)
                    @if (isset($link['enabled']) && $link['enabled'])
                    @if (isset($link['children']))
                    {{-- Dropdown menu --}}
                    <li @class(['active'=> (strpos(Route::currentRouteName(), $link['active']) === 0), 'nav-item
                        dropdown'])>
                        <a href="{{ route($link['route_name']) }}" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-{{ $link['icon'] }} icon"></i>
                            </span>
                            <span class="nav-link-title">
                                @lang($link['name'])
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    @foreach ($link['children'] as $child)
                                    <a class="dropdown-item" href="{{ route($child['route_name']) }}">
                                        <div class="nav-link-icon d-md-none d-lg-inline-block">
                                            <i class="ti ti-{{ $child['icon'] }} icon"></i>
                                        </div>
                                        @lang($child['name'])
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    @else
                    {{-- Single menu --}}
                    <li @class(['active'=> (strpos(Route::currentRouteName(), $link['active']) === 0), 'nav-item'])>
                        <a href="{{ route($link['route_name']) }}" class="nav-link">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-{{ $link['icon'] }} icon"></i>
                            </span>
                            <span class="nav-link-title">
                                @lang($link['name'])
                            </span>
                        </a>
                    </li>
                    @endif
                    @endif
                    @endforeach
                    @endif
                </ul>
                {{-- <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="." method="get">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="ti ti-search icon"></i>
                            </span>
                            <input type="text" value="" class="form-control" placeholder="Search…"
                                aria-label="Search in website">
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</div>