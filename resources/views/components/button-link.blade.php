@props([
    'url' => '/',
    'icon' => null,
    'bgClass' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black',
    'mobile' => null,
])

<a href="{{ $url }}"
    class="{{ $bgClass }} {{ $hoverClass }} {{ $textClass }} {{ $mobile ? 'block' : '' }} rounded px-4 py-2 transition duration-300 hover:shadow-md">
    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
