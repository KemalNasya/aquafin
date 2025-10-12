@extends('layouts.app')

@section('title', $article['title'] . ' - Company Name')

@section('content')
    <section class="article-header position-relative overflow-hidden d-flex align-items-center justify-content-center text-white text-center"
        style="height: 65vh; background: url('{{ $article['image'] }}') center center / cover no-repeat fixed;">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: rgba(0, 0, 0, 0.55); z-index: 0;"></div>

        <div class="container position-relative z-1">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    {{-- Ganti bg-primary dengan class kustom bg-primary-gradient --}}
                    <span class="badge bg-primary-gradient mb-3 px-3 py-2 rounded-pill">{{ $article['category'] }}</span>

                    <h1 class="display-4 fw-bold mb-4"
                        style="text-shadow: 3px 3px 8px rgba(0,0,0,0.7); animation: fadeInDown 1s ease-out;">
                        {{ $article['title'] }}
                    </h1>
                    <div class="d-flex justify-content-center align-items-center gap-3 text-light small mb-4"
                        style="animation: fadeInUp 1.3s ease-out;">
                        <span class="text-white-50"><i class="fas fa-user me-1 text-primary-light"></i> {{ $article['author'] }}</span>
                        <span class="text-muted">•</span>
                        <span class="text-white-50"><i class="fas fa-calendar me-1 text-primary-light"></i> {{ $article['published_at'] }}</span>
                        <span class="text-muted">•</span>
                        <span class="text-white-50"><i class="fas fa-clock me-1 text-primary-light"></i> {{ $article['read_time'] }}</span>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="py-5 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <div class="article-content bg-white text-dark p-4 rounded-4 shadow-sm"
                        style="animation: fadeInUp 1.2s ease-out;">
                        @if(!empty($article['content']))
                            {!! $article['content'] !!}
                        @else
                            <p class="text-muted fst-italic">Konten artikel belum tersedia.</p>
                        @endif
                    </div>

                    <div class="article-footer mt-5 pt-4 border-top">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="tags mb-3 mb-md-0">
                                @if (!empty($article['tags']) && count($article['tags']) > 0)
                                    <span class="text-muted me-2">Tags:</span>
                                    @foreach ($article['tags'] as $tag)
                                        <span
                                            class="badge bg-light text-dark border rounded-pill me-1">{{ $tag }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- Share Buttons -->
                            <div class="share-buttons d-flex gap-2">
                                <span class="text-muted me-2">Share:</span>
                                <a href="#" id="copy-link" class="btn btn-outline-success btn-sm rounded-pill" title="Copy Link"><i class="fas fa-link"></i></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article['title']) }}" target="_blank" class="btn btn-outline-info btn-sm rounded-pill" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="https://wa.me/?text={{ urlencode($article['title'] . ' ' . request()->fullUrl()) }}" target="_blank" class="btn btn-outline-success btn-sm rounded-pill" title="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center w-100 mt-5">
                        <a href="{{ route('article') }}"
                            {{-- Ganti btn-outline-primary dengan class kustom btn-primary-outline --}}
                            class="btn btn-primary-outline rounded-pill px-4 py-2 shadow-sm"
                            style="min-width: 230px; text-align: center;">
                            <i class="fas fa-arrow-left me-3"></i> Kembali ke Artikel
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm mb-4 rounded-4 overflow-hidden card-hover"
                        style="animation: fadeInUp 1.4s ease-out;">
                        <div class="card-header bg-white border-0">
                            <h6 class="fw-bold mb-0 text-primary-dark">
                                <i class="fas fa-clock text-primary-light me-2"></i>Artikel Terbaru
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                @foreach ($relatedPosts->take(5) as $popular)
                                    <a href="{{ route('article.show', $popular['slug']) }}"
                                        class="list-group-item list-group-item-action border-0 px-0 py-3 hover-lift">
                                        <div class="d-flex w-100 justify-content-between align-items-start">
                                            <h6 class="fw-bold mb-1 text-dark">
                                                {{ \Str::limit($popular['title'], 50) }}
                                            </h6>
                                            {{-- Ganti bg-gradient-primary dengan class kustom bg-primary-gradient --}}
                                            <small class="badge bg-primary-gradient">
                                                {{ $popular['read_time'] ?? '5 min' }}
                                            </small>
                                        </div>
                                        <small class="text-muted">
                                            <i class="fas fa-calendar me-1"></i>
                                            {{ \Carbon\Carbon::parse($popular['published_at'] ?? now())->format('M d, Y') }}
                                        </small>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-gradient-related-posts">
        <div class="container">
            <div class="text-center mb-5 text-white">
                <h2 class="fw-bold">Artikel Terkait</h2>
                <p class="text-light">Artikel lain yang mungkin Anda suka</p>
            </div>

            <div class="row">
                @if ($relatedPosts->count() > 0)
                    @foreach ($relatedPosts as $index => $related)
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden card-hover"
                                style="animation: fadeInUp {{ ($index + 1) * 0.2 }}s ease-out;">
                                <img src="{{ $related['image'] }}" alt="{{ $related['title'] }}"
                                    class="card-img-top" style="height: 220px; object-fit: cover;">
                                <div class="card-body">
                                    {{-- Ganti badge bg-primary dengan class kustom bg-primary-gradient --}}
                                    <span class="badge bg-primary-gradient mb-2">{{ $related['category'] }}</span>
                                    <h5 class="card-title fw-bold">{{ Str::limit($related['title'], 50) }}</h5>
                                    <p class="card-text text-muted">{{ $related['excerpt'] }}</p>
                                    <a href="{{ route('article.show', $related['slug']) }}"
                                        class="btn btn-primary rounded-pill mt-2">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p class="text-light">Belum ada artikel terkait.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <style>
        /* Global Color Variables (New Gradient) */
        :root {
            --color-dark-gradient: #0d47a1; /* Biru gelap */
            --color-light-gradient: #00bcd4; /* Biru muda / Teal */
            --primary-shadow-color: rgba(13, 71, 161, 0.5); /* Shadow yang disesuaikan */
        }

        /* Utility Classes for Text Color */
        .text-primary-dark { color: var(--color-dark-gradient) !important; }
        .text-primary-light { color: var(--color-light-gradient) !important; }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Cards Hover */
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15) !important;
        }

        .hover-lift { transition: transform 0.3s ease; }
        .hover-lift:hover { transform: translateY(-2px); }

        /* ====== GRADIENT STYLES ====== */

        /* Background Gradient for Badges and Sidebar Items */
        .bg-primary-gradient {
            background: linear-gradient(90deg, var(--color-dark-gradient) 0%, var(--color-light-gradient) 100%) !important;
            color: white !important;
            border: none !important;
        }

        /* Background Gradient for Related Posts Section */
        .bg-gradient-related-posts {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%); /* Pertahankan gradien biru tua/sedang untuk kontras */
            border-bottom: 2px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }


        /* Solid Button (e.g., Baca Selengkapnya) */
        .btn-primary-gradient {
            background: linear-gradient(90deg, var(--color-dark-gradient) 0%, var(--color-light-gradient) 100%);
            border: none;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px var(--primary-shadow-color);
        }

        .btn-primary-gradient:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px var(--primary-shadow-color);
            color: white; /* Pastikan warna teks tetap putih saat hover */
        }

        /* Outline Button (e.g., Kembali ke Artikel) */
        .btn-primary-outline {
            border: 2px solid var(--color-dark-gradient); /* Border dengan warna gradien gelap */
            color: var(--color-dark-gradient); /* Warna teks dengan warna gradien gelap */
            background-color: transparent;
            transition: all 0.3s ease;
        }

        .btn-primary-outline:hover {
            /* Saat hover, terapkan gradien sebagai background */
            background: linear-gradient(90deg, var(--color-dark-gradient) 0%, var(--color-light-gradient) 100%);
            color: white; /* Ubah warna teks menjadi putih */
            border-color: var(--color-dark-gradient); /* Pertahankan border */
            transform: translateY(-2px);
            box-shadow: 0 4px 10px var(--primary-shadow-color);
        }


        /* Article Text */
        .article-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #212529;
        }

        .article-content h2, .article-content h3, .article-content h4 {
            color: var(--color-dark-gradient); /* Heading dalam konten menggunakan warna gradien gelap */
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .article-content img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 1.5rem 0;
        }

        .article-content blockquote {
            border-left: 4px solid var(--color-light-gradient); /* Blockquote menggunakan warna gradien muda */
            padding-left: 1rem;
            margin: 2rem 0;
            font-style: italic;
            color: #555;
        }

        /* Share Buttons */
        .share-buttons .btn {
            transition: all 0.3s ease;
        }

        .share-buttons .btn:hover {
            transform: scale(1.1);
        }
    </style>

    <script>
        document.getElementById('copy-link').addEventListener('click', function(e) {
            e.preventDefault();
            navigator.clipboard.writeText(window.location.href).then(function() {
                alert('Link berhasil disalin!');
            }).catch(function(err) {
                console.error('Gagal menyalin link: ', err);
            });
        });
    </script>
@endsection
