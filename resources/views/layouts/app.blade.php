<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Name')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 🌊 Warna gradasi utama */
        :root {
            --main-gradient: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
        }

        /* 🎯 STYLING BARU UNTUK LATAR BELAKANG HALAMAN */
        body {
            /* Menerapkan gradien ke seluruh latar belakang halaman */
            background: var(--main-gradient);
            /* PENTING: Mengubah warna teks default menjadi putih agar terbaca pada latar belakang gelap */
            color: #fff;
        }
        /* 🎯 AKHIR STYLING BARU */

        /* 🔹 Navbar Styling */
        .navbar-custom {
            background: var(--main-gradient);
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #fff !important;
            transition: all 0.3s ease;
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .navbar-brand:hover {
            opacity: 0.85;
        }

        /* 🔹 Section pemisah di bawah header */
        .header-divider {
            height: 80px;
            background: var(--main-gradient);
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        /* 🔹 Footer styling */
        footer {
            background: var(--main-gradient);
            color: #fff;
            border-top: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            transition: 0.3s;
        }

        footer a:hover {
            text-decoration: underline;
            opacity: 0.85;
        }

        /* 🔹 Animasi halus */
        .fade-in {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    <x-header class="navbar-custom" />

    <section class="header-divider"></section>

    <main>
        @yield('content')
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>