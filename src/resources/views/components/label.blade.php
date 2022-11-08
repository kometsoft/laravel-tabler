@props(['label' => null])

<label {!! $attributes->merge(['class' => 'form-label']) !!}>
    {{ $label ? __($label) : $slot }}
</label>




{{--

<x-tabler::label class="col-md-3 col-form-label" label="Name"></x-tabler::label>

--}}