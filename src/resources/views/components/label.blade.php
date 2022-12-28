@props(['label' => null])

<label {!! $attributes->merge(['class' => 'form-label']) !!}>
    {{ $label ? $label : $slot }}
</label>




{{--

<x-tab::label class="col-md-3 col-form-label" label="Name"></x-tab::label>

--}}