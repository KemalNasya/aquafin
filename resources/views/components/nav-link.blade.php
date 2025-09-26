@props(['active' => false, 'href' => '/'])

<li class="nav-item">
    <a {{ $attributes->class(['nav-link', 'active' => $active]) }} href="{{ $href }}">
        {{ $slot }}
    </a>
</li>