@extends('layouts.app')

@section('title', 'About Us - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">Tentang Kami</h1>
                    <p class="lead">Mengenal lebih dekat perusahaan dan nilai-nilai yang kami anut</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Visi dan Misi</h2>
                    <div class="mb-4">
                        <h4 class="text-primary">Visi</h4>
                        <p class="text-muted">Menjadi perusahaan teknologi terdepan yang memberikan solusi inovatif untuk kemajuan bisnis di Indonesia.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="text-primary">Misi</h4>
                        <ul class="text-muted">
                            <li>Menyediakan layanan teknologi berkualitas tinggi</li>
                            <li>Mengembangkan solusi yang sesuai kebutuhan pasar</li>
                            <li>Memberikan nilai tambah bagi klien dan stakeholders</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/500x300" alt="About Us" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Tim Kami</h2>
                <p class="text-muted">Profesional berpengalaman di bidangnya</p>
            </div>
            <div class="row">
                @foreach($team as $member)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <img src="https://via.placeholder.com/150x150" alt="{{ $member['name'] }}" class="rounded-circle mb-3">
                            <h5 class="card-title">{{ $member['name'] }}</h5>
                            <p class="text-primary">{{ $member['position'] }}</p>
                            <p class="text-muted small">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
