@extends(config('laravel-tabler.layout.guest'))

@section('content')
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="/" class="navbar-brand navbar-brand-autodark">
                <img src="{{ config('laravel-tabler.logo_path') }}" height="36" alt="">
            </a>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">@lang('Register')</h2>
                <form method="POST" action="{{ route('register') }}" autocomplete="off">
                    @csrf

                    <div class="mb-3">
                        <x-tab::label :label="__('Name')"></x-tab::label>
                        <x-tab::input type="text" name="name" :value="old('name')" required autofocus></x-tab::input>
                    </div>
                    <div class="mb-3">
                        <x-tab::label :label="__('Email address')"></x-tab::label>
                        <x-tab::input type="email" name="email" :value="old('email')" required></x-tab::input>
                    </div>
                    <div class="mb-3">
                        <x-tab::label :label="__('Password')"></x-tab::label>
                        <x-tab::input type="password" name="password" required></x-tab::input>
                    </div>
                    <div class="mb-3">
                        <x-tab::label :label="__('Confirm password')"></x-tab::label>
                        <x-tab::input type="password" name="password_confirmation" required></x-tab::input>
                    </div>
                    <div class="form-footer">
                        <x-tab::button type="submit" class="btn-primary w-100" :label="__('Register')"></x-tab::button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
