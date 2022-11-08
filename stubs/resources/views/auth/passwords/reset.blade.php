@extends('tabler::layouts.guest')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('Reset Password')</h3>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <x-tabler::input type="hidden" name="token" :value="$token"></x-tabler::input>

                        <div class="row mb-3">
                            <x-tabler::label class="col-md-4 col-form-label text-md-end" label="Email address"></x-tabler::label>

                            <div class="col-md-6">
                                <x-tabler::input type="email" name="email" :value="$email ?? old('email')" required autofocus></x-tabler::input>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <x-tabler::label class="col-md-4 col-form-label text-md-end" label="Password"></x-tabler::label>

                            <div class="col-md-6">
                                <x-tabler::input type="password" name="password" required></x-tabler::input>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <x-tabler::label class="col-md-4 col-form-label text-md-end" label="Confirm Password"></x-tabler::label>

                            <div class="col-md-6">
                                <x-tabler::input type="password" name="password_confirmation" required></x-tabler::input>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <x-tabler::button type="submit" class="btn btn-primary" label="Reset Password"></x-tabler::button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
