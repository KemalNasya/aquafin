@props(['active' => false, 'href' => '/'])

<li class="nav-item">
    <a {{ $attributes->class(['nav-link', 'text-white', 'active' => $active, 'text-warning fw-bold' => $active]) }} href="{{ $href }}">
        {{ $slot }}
    </a>
</li>
