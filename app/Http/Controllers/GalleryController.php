<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $categories = [
            [
                'name' => 'Kolam Budidaya',
                'icon' => 'fas fa-water',
                'color' => 'primary',
                'photos' => [
                    [
                        'title' => 'Kolam Beton Modern',
                        'description' => 'Kolam beton dengan sistem aerasi canggih untuk budidaya ikan lele',
                        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-15',
                        'photographer' => 'Ahmad Rahman',
                        'views' => 1250,
                        'likes' => 89,
                        'event' => 'Kolam Budidaya'
                    ],
                    [
                        'title' => 'Sistem Aerasi Kolam',
                        'description' => 'Instalasi sistem aerasi untuk menjaga kualitas air kolam budidaya',
                        'image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-16',
                        'photographer' => 'Siti Nurhaliza',
                        'views' => 892,
                        'likes' => 67,
                        'event' => 'Kolam Budidaya'
                    ],
                    [
                        'title' => 'Kolam Terpal Ekonomis',
                        'description' => 'Kolam terpal sebagai alternatif ekonomis untuk budidaya ikan skala kecil',
                        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-17',
                        'photographer' => 'Budi Santoso',
                        'views' => 756,
                        'likes' => 45,
                        'event' => 'Kolam Budidaya'
                    ]
                ]
            ],
            [
                'name' => 'Varietas Ikan',
                'icon' => 'fas fa-fish',
                'color' => 'success',
                'photos' => [
                    [
                        'title' => 'Ikan Lele Sangkuriang',
                        'description' => 'Varietas ikan lele unggul dengan pertumbuhan cepat dan daging berkualitas',
                        'image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-10',
                        'photographer' => 'Dewi Kartika',
                        'views' => 945,
                        'likes' => 72,
                        'event' => 'Varietas Ikan'
                    ],
                    [
                        'title' => 'Ikan Nila Merah',
                        'description' => 'Ikan nila dengan warna merah alami dan rasa daging yang gurih',
                        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-08',
                        'photographer' => 'Rudi Hartono',
                        'views' => 1102,
                        'likes' => 95,
                        'event' => 'Varietas Ikan'
                    ],
                    [
                        'title' => 'Ikan Gurame Premium',
                        'description' => 'Ikan gurame dengan kualitas premium untuk pasar ekspor',
                        'image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-12',
                        'photographer' => 'Maya Sari',
                        'views' => 623,
                        'likes' => 38,
                        'event' => 'Varietas Ikan'
                    ]
                ]
            ],
            [
                'name' => 'Sertifikasi & Kualitas',
                'icon' => 'fas fa-certificate',
                'color' => 'info',
                'photos' => [
                    [
                        'title' => 'Sertifikasi HACCP',
                        'description' => 'Proses sertifikasi HACCP untuk standar keamanan pangan',
                        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-05',
                        'photographer' => 'Agus Setiawan',
                        'views' => 756,
                        'likes' => 45,
                        'event' => 'Sertifikasi'
                    ],
                    [
                        'title' => 'Pengujian Kualitas Air',
                        'description' => 'Laboratorium pengujian kualitas air kolam budidaya',
                        'image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-03',
                        'photographer' => 'Nina Amelia',
                        'views' => 892,
                        'likes' => 67,
                        'event' => 'Sertifikasi'
                    ],
                    [
                        'title' => 'Standar Organik',
                        'description' => 'Budidaya ikan dengan standar organik bebas bahan kimia',
                        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-07',
                        'photographer' => 'Fajar Nugroho',
                        'views' => 1250,
                        'likes' => 89,
                        'event' => 'Sertifikasi'
                    ]
                ]
            ],
            [
                'name' => 'Panen & Distribusi',
                'icon' => 'fas fa-truck',
                'color' => 'warning',
                'photos' => [
                    [
                        'title' => 'Panen Ikan Lele',
                        'description' => 'Proses panen ikan lele siap jual dengan kualitas terbaik',
                        'image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-20',
                        'photographer' => 'Hendra Wijaya',
                        'views' => 945,
                        'likes' => 72,
                        'event' => 'Panen'
                    ],
                    [
                        'title' => 'Distribusi ke Pasar',
                        'description' => 'Pengiriman produk ikan segar ke berbagai pasar tradisional',
                        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-01-18',
                        'photographer' => 'Lina Marlina',
                        'views' => 1102,
                        'likes' => 95,
                        'event' => 'Distribusi'
                    ]
                ]
            ]
        ];

        $recentPhotos = [
            [
                'title' => 'Panen Massal Lele',
                'category' => 'Panen',
                'date' => '2024-01-20',
                'icon' => 'fas fa-fish'
            ],
            [
                'title' => 'Kolam Baru Siap Pakai',
                'category' => 'Kolam',
                'date' => '2024-01-18',
                'icon' => 'fas fa-water'
            ],
            [
                'title' => 'Sertifikasi Organik',
                'category' => 'Sertifikasi',
                'date' => '2024-01-15',
                'icon' => 'fas fa-certificate'
            ]
        ];

        return view('gallery', compact('categories', 'recentPhotos'));
    }

    public function download($photoId)
    {
        // Logic untuk download photo
        return response()->download(storage_path('photos/sample.jpg'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        // Logic untuk search photos
        return view('gallery-search', compact('query'));
    }
}
