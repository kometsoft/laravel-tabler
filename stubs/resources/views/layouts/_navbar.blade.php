<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-home icon"></i>
                            </span>
                            <span class="nav-link-title">
                                @lang('Foo')
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-star icon"></i>
                            </span>
                            <span class="nav-link-title">
                                @lang('Bar')
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item" href="#">
                                        @lang('Foo')
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        @lang('Baz')
                                    </a>
                                </div>
                                <div class="dropdown-menu-column">
                                    <div class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#sidebar-cards"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            @lang('Bar')
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                @lang('Foo')
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                @lang('Bar')
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                {{-- <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="#" method="get" autocomplete="off" novalidate="">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="ti ti-search icon"></i>
                            </span>
                            <input type="text" value="" class="form-control" placeholder="Search…">
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</div>