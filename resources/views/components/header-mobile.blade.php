<div class="collapse navbar-collapse d-lg-none bg-white shadow-sm" id="navbarMobile">
    <div class="navbar-nav p-3">
        <x-nav-link href="/home" active class="mobile-nav-link">Home</x-nav-link>
        <x-nav-link href="/about" class="mobile-nav-link">About</x-nav-link>
        <x-nav-link href="/infrastructure" class="mobile-nav-link">Infrastructure</x-nav-link>
        <x-nav-link href="/articles" class="mobile-nav-link">Articles</x-nav-link>
        <x-nav-link href="/gallery" class="mobile-nav-link">Gallery</x-nav-link>
        <x-nav-link href="/contact" class="mobile-nav-link">Contact</x-nav-link>
    </div>

    <!-- Custom CSS -->
    <style>
        .mobile-nav-link {
            padding: 12px 16px;
            margin-bottom: 4px;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: block;
            color: #333 !important;
            text-decoration: none;
        }

        .mobile-nav-link:hover {
            background-color: #f8f9fa;
            color: #007bff !important;
            transform: translateX(5px);
        }

        .mobile-nav-link.active {
            background-color: #007bff;
            color: white !important;
        }
    </style>
</div>
