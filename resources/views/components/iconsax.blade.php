@props([
    'icon',
    'size' => 24,
    'color' => 'currentColor',
    'variant' => 'linear',
    'class' => ''
])

@php
    // Iconsax Linear SVG Paths (Simplified selection for BongoCasting)
    $icons = [
        'arrow-right-up' => '<path d="M13 19V7.83L17.59 12.42L19 11L12 4L5 11L6.41 12.41L11 8.83V19H13Z" fill="currentColor"/>',
        'location' => '<path d="M12 13.43c-1.18 0-2.14-.96-2.14-2.14 0-1.18.96-2.14 2.14-2.14 1.18 0 2.14.96 2.14 2.14 0 1.18-.96 2.14-2.14 2.14M12 2c-4.41 0-8 3.59-8 8 0 5.53 7.05 11.4 7.35 11.66.19.16.42.24.65.24s.46-.08.65-.24c.3-.26 7.35-6.13 7.35-11.66 0-4.41-3.59-8-8-8" fill="currentColor"/>',
        'music' => '<path d="M15 2H9c-3.87 0-5 1.13-5 5v10c0 3.87 1.13 5 5 5h6c3.87 0 5-1.13 5-5V7c0-3.87-1.13-5-5-5m-1 12.5c0 1.38-1.12 2.5-2.5 2.5S9 15.88 9 14.5s1.12-2.5 2.5-2.5c.28 0 .54.05.78.13V8.5c0-.28.22-.5.5-.5s.5.22.5.5z" fill="currentColor"/>',
        'user' => '<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4m0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4" fill="currentColor"/>',
        'star' => '<path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="currentColor"/>'
    ];

    $path = $icons[$icon] ?? '';
@endphp

<svg 
    width="{{ $size }}" 
    height="{{ $size }}" 
    viewBox="0 0 24 24" 
    fill="none" 
    xmlns="http://www.w3.org/2000/svg"
    {{ $attributes->merge(['class' => 'inline-block ' . $class]) }}
    style="color: {{ $color }};"
>
    {!! $path !!}
</svg>
