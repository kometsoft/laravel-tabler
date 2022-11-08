{{-- <x-tabler::select name="roles" id="roles" :value="$user->email" :options="$roles"></x-tabler::select> --}}

@props(['name' => null, 'value' => null, 'disabled' => false, 'placeholder' => null, 'options' => [], 'optionValue' =>
'id', 'optionLabel' => 'name'])

@php
$classes = ($errors->has($name) ?? false)
? 'form-select is-invalid'
: 'form-select';
@endphp

<select name="{{ $name ? $name : '' }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $classes])
  !!}>
  <option value="">{{ $placeholder }}</option>
  @forelse ($options as $option)
  <option value="{{ $option->$optionValue }}" {{ $option->$optionValue == old($name, $value) ? 'selected' : '' }}>{{
    $option->$optionLabel }}</option>
  @empty
  @endforelse
</select>

@error($name)
<span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
</span>
@enderror

{{--

<x-select name="user_id" id="user_id" :value="old('user_id', request()->user_id)" :options="collect([
    (object) ['id' => '', 'name' => 'Sila Pilih'],
    (object) ['id' => 1, 'name' => 'Program'],
])"></x-select>

--}}