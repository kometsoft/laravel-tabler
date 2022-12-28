@extends(config('laravel-tabler.layout.guest'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('Reset Password')</h3>
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <x-tab::label class="col-md-4 col-form-label text-md-end" :label="__('Email address')"></x-tab::label>

                            <div class="col-md-6">
                                <x-tab::input type="email" name="email" :value="old('email')" required autocomplete="email" autofocus></x-tab::input>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <x-tab::button type="submit" class="btn btn-primary" :label="__('Send password reset link')"></x-tab::button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
