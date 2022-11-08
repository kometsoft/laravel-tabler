@extends('tabler::layouts.guest')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('Confirm Password')</h3>
                </div>

                <div class="card-body">
                    <p>@lang('Please confirm your password before continuing.')</p>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <x-tabler::label class="col-md-4 col-form-label text-md-end" label="Password"></x-tabler::label>

                            <div class="col-md-6">
                                <x-tabler::input type="password" name="password" required></x-tabler::input>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <x-tabler::button type="submit" class="btn btn-primary" label="Confirm password?"></x-tabler::button>

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
