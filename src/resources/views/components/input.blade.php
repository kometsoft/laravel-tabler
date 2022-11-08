@props(['name' => null, 'value' => null, 'disabled' => false, 'hint' => null])

@php
$classes = ($errors->has($name) ?? false)
? 'form-control is-invalid'
: 'form-control';
@endphp

<input name="{{ $name ? $name : '' }}" value="{{ old($name, $value) }}" {{ $disabled ? 'disabled' : '' }} {!!
    $attributes->merge(['class' => $classes]) !!}>

@if ($hint)
<small class="form-hint">{{ $hint }}</small>
@endif

@error($name)
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror

{{--

<x-tabler::input name="name" :value="old('name', $user->name)" required></x-tabler::input>

--}}