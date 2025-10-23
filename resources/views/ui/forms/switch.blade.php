@props([
    'name' => $attributes->get('name') ?? $attributes->get('wire:model') ?? $attributes->get('wire:model.live'),
    'label' => null,
    'id' => $attributes->get('id') ?? $attributes->get('wire:model') ?? $attributes->get('wire:model.blur') ?? $attributes->get('name') ?? $attributes->get('wire:model.live'),
    'true_text' => '',
    'false_text' => '',
    'container_class' => $attributes->get('container_class'),
])

@php
    $hasError = $errors->has($name);
@endphp

<div class="{{ $container_class }}">
    @if ($label)
        <label for="label_{{ $id }}" class="form-label">{{ $label }}</label>
    @endif

    <div class="form-check form-switch mb-2" x-data="{ checked: @entangle($attributes->wire('model')) }">
        <input
            id="{{ $id }}"
            type="checkbox"
            name="{{ $name }}"
            {{ $attributes->merge([
                'class' => 'form-check-input' . ($hasError ? ' is-invalid' : '')
            ]) }}
        >
        <label class="form-check-label" for="{{ $id }}">
            <span x-text="checked ? '{{ $true_text }}' : '{{ $false_text }}'"></span>
        </label>
    </div>

    @if ($hasError)
        <div class="invalid-feedback">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
