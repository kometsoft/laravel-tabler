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
                <h2 class="card-title text-center mb-4">@lang('Register')</h2>
                <form method="POST" action="{{ route('register') }}" autocomplete="off">
                    @csrf

                    <div class="mb-3">
                        <x-tabler::label :label="__('Name')"></x-tabler::label>
                        <x-tabler::input type="text" name="name" :value="old('name')" required autofocus></x-tabler::input>
                    </div>
                    <div class="mb-3">
                        <x-tabler::label :label="__('Email address')"></x-tabler::label>
                        <x-tabler::input type="email" name="email" :value="old('email')" required></x-tabler::input>
                    </div>
                    <div class="mb-3">
                        <x-tabler::label :label="__('Password')"></x-tabler::label>
                        <x-tabler::input type="password" name="password" required></x-tabler::input>
                    </div>
                    <div class="mb-3">
                        <x-tabler::label :label="__('Confirm password')"></x-tabler::label>
                        <x-tabler::input type="password" name="password_confirmation" required></x-tabler::input>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">@lang('Register')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
