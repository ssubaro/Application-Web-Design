@props(['type' => 'success'])

@php
    $classes = [
        'success' => 'bg-green-100 text-green-700 border-green-500',
        'error' => 'bg-red-100 text-red-700 border-red-500',
        'info' => 'bg-purple-100 text-purple-700 border-purple-500',
    ][$type] ?? 'bg-purple-100 text-purple-700 border-purple-500';
@endphp

<div {{ $attributes->merge(['class' => "border-l-4 p-4 mb-4 {$classes}"]) }} role="alert">
    {{ $slot }}
</div>
