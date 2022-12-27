@extends(config('tabler.layout.guest'))

@section('content')
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="/" class="navbar-brand navbar-brand-autodark">
                <img src="{{ config('tabler.logo_path') }}" height="36" alt="">
            </a>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">@lang('Log In')</h2>
                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf

                    <div class="mb-3">
                        <x-tabler::label :label="__('Email address')"></x-tabler::label>
                        <x-tabler::input type="email" name="email" :value="old('email')" required autofocus></x-tabler::input>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            @lang('Password')
                            <span class="form-label-description">
                                @if(Route::has('password.request'))
                                <a href="{{ route('password.request') }}">@lang('Forgot password?')</a>
                                @endif
                            </span>
                        </label>
                        <x-tabler::input type="password" name="password" required></x-tabler::input>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" @checked(old('remember'))>
                            <span class="form-check-label">@lang('Remember me')</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <x-tabler::button type="submit" class="btn-primary w-100" :label="__('Log in')"></x-tabler::button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection