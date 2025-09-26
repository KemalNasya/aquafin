@extends('layouts.app')

@section('title', 'Contact - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">Hubungi Kami</h1>
                    <p class="lead">Kami siap membantu Anda mencapai tujuan bisnis</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <h3 class="fw-bold mb-4">Kirim Pesan</h3>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>

                <div class="col-lg-4">
                    <h3 class="fw-bold mb-4">Informasi Kontak</h3>
                    <div class="contact-info">
                        <div class="d-flex mb-3">
                            <i class="bi-geo-alt text-primary me-3 fs-5"></i>
                            <div>
                                <h6 class="fw-bold">Alamat</h6>
                                <p class="text-muted mb-0">Jl. Contoh No. 123<br>Jakarta Selatan, Indonesia</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi-telephone text-primary me-3 fs-5"></i>
                            <div>
                                <h6 class="fw-bold">Telepon</h6>
                                <p class="text-muted mb-0">+62 21 1234 5678</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi-envelope text-primary me-3 fs-5"></i>
                            <div>
                                <h6 class="fw-bold">Email</h6>
                                <p class="text-muted mb-0">info@company.com</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="bi-clock text-primary me-3 fs-5"></i>
                            <div>
                                <h6 class="fw-bold">Jam Operasional</h6>
                                <p class="text-muted mb-0">Senin - Jumat: 08:00 - 17:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="fw-bold mb-4 text-center">Lokasi Kami</h3>
                    <div class="map-container bg-white p-3 rounded shadow-sm">
                        <!-- Placeholder for map -->
                        <div class="bg-secondary text-white text-center py-5 rounded">
                            <i class="bi-map display-1"></i>
                            <p class="mt-3">Peta Lokasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
