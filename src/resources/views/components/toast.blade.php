@props(['message' => null, 'color' => 'primary', 'title' => null])

<div {!! $attributes->merge(['class' => 'toast-container position-fixed top-0 end-0 p-3']) !!}>
    <div class=" toast toast-{{ $color }} show shadow-lg" data-bs-autohide="false" data-bs-toggle="toast">
        <div class="toast-header">
            <strong class="me-auto text-{{ $color }}">{{ $title }}</strong>
            <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-muted">
            {{ $message ?? $slot }}
        </div>
    </div>
</div>

{{--

<x-tabler::toast color="danger" title="Error!" :message="session('error')"></x-tabler::toast>

--}}