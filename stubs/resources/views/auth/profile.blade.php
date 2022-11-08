@extends(config('tabler.layout'))

@section('header')
<x-tabler::page-header title="Profile"></x-tabler::page-header>
@endsection

@section('content')
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@lang('Account Information')</h3>
                <div class="card-actions">
                    <x-tabler::button type="submit" form="form-profile-account" class="btn btn-primary" icon="check"
                        label="Save"></x-tabler::button>
                </div>
            </div>
            <div class="card-body">
                <form id="form-profile-account" action="{{ route('tabler.profile.update', $user) }}" method="POST">
                    @csrf
                    <div class="form-group mb-3 row">
                        <x-tabler::label class="col-md-3 col-form-label" label="Avatar"></x-tabler::label>
                        <div class="col-md-6">
                            <span class="avatar avatar-xl"
                                style="background-image: url('{{ $user->photo_url }}')"></span>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <x-tabler::label class="col-md-3 col-form-label" label="Name"></x-tabler::label>
                        <div class="col-md-6">
                            <x-tabler::input name="name" id="name" :value="$user->name" required></x-tabler::input>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <x-tabler::label class="col-md-3 col-form-label" label="Email"></x-tabler::label>
                        <div class="col-md-6">
                            <x-tabler::input type="email" name="email" id="email" :value="$user->email" required>
                            </x-tabler::input>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <x-tabler::label class="col-md-3 col-form-label" label="Roles"></x-tabler::label>
                        <div class="col-md-6">
                            {{ implode(', ', $user->getRoleNames()->toArray()) }}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@lang('Account Security')</h3>
                <div class="card-actions">
                    <x-tabler::button type="submit" form="form-profile-password" class="btn btn-primary" icon="check"
                        label="Save"></x-tabler::button>
                </div>
            </div>
            <div class="card-body">
                <form id="form-profile-password" action="{{ route('tabler.profile.update-password', $user) }}"
                    method="POST">
                    @csrf @method('PUT')
                    <div class="form-group mb-3 row">
                        <x-tabler::label class="col-md-3 col-form-label" label="Current password"></x-tabler::label>
                        <div class="col-md-6">
                            <x-tabler::input type="password" name="current_password" id="current_password" required>
                            </x-tabler::input>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <x-tabler::label class="col-md-3 col-form-label" label="New Password"></x-tabler::label>
                        <div class="col-md-6">
                            <x-tabler::input type="password" name="new_password" id="new_password" required>
                            </x-tabler::input>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <x-tabler::label class="col-md-3 col-form-label" label="Retype New Password"></x-tabler::label>
                        <div class="col-md-6">
                            <x-tabler::input type="password" name="new_password_confirmation"
                                id="new_password_confirmation" required></x-tabler::input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection