@extends('tabler::layouts.guest')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('Login')</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <x-tabler::label class="col-md-4 col-form-label text-md-end" label="Email address"></x-tabler::label>

                            <div class="col-md-6">
                                <x-tabler::input type="email" name="email" :value="old('email')" required autofocus></x-tabler::input>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <x-tabler::label class="col-md-4 col-form-label text-md-end" label="Password"></x-tabler::label>

                            <div class="col-md-6">
                                <x-tabler::input type="password" name="password" required></x-tabler::input>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" @checked(old('remember'))>

                                    <label class="form-check-label" for="remember">
                                        @lang('Remember me')
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <x-tabler::button type="submit" class="btn btn-primary" label="Login"></x-tabler::button>
                                @if(Route::has('password.request'))
                                    <x-tabler::button href="{{ route('password.request') }}" class="btn btn-link" label="Forgot password?"></x-tabler::button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
