<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $categories = [
            [
                'name' => 'Event & Konferensi',
                'icon' => 'bi-calendar-event',
                'color' => 'primary',
                'photos' => [
                    [
                        'title' => 'Tech Conference 2024 Opening',
                        'description' => 'Pembukaan acara Tech Conference 2024 dengan keynote speaker',
                        'image' => 'https://via.placeholder.com/400x300/4a90e2/ffffff?text=Conference+Opening',
                        'date' => '2024-01-15',
                        'photographer' => 'John Doe',
                        'views' => 1250,
                        'likes' => 89,
                        'event' => 'Tech Conference 2024'
                    ],
                    [
                        'title' => 'Workshop Session',
                        'description' => 'Peserta aktif mengikuti workshop development',
                        'image' => 'https://via.placeholder.com/400x300/50c878/ffffff?text=Workshop',
                        'date' => '2024-01-16',
                        'photographer' => 'Jane Smith',
                        'views' => 892,
                        'likes' => 67,
                        'event' => 'Tech Conference 2024'
                    ]
                ]
            ],
            [
                'name' => 'Workshop & Training',
                'icon' => 'bi-mortarboard',
                'color' => 'success',
                'photos' => [
                    [
                        'title' => 'Laravel Advanced Training',
                        'description' => 'Sesi training Laravel untuk developer senior',
                        'image' => 'https://via.placeholder.com/400x300/27ae60/ffffff?text=Laravel+Training',
                        'date' => '2024-01-10',
                        'photographer' => 'Mike Johnson',
                        'views' => 756,
                        'likes' => 45,
                        'event' => 'Laravel Workshop'
                    ],
                    [
                        'title' => 'React Workshop Group Photo',
                        'description' => 'Foto bersama peserta workshop React development',
                        'image' => 'https://via.placeholder.com/400x300/3498db/ffffff?text=React+Workshop',
                        'date' => '2024-01-08',
                        'photographer' => 'Sarah Wilson',
                        'views' => 623,
                        'likes' => 38,
                        'event' => 'React Workshop'
                    ]
                ]
            ],
            [
                'name' => 'Company Activities',
                'icon' => 'bi-building',
                'color' => 'info',
                'photos' => [
                    [
                        'title' => 'Team Building 2024',
                        'description' => 'Aktivitas team building di area outdoor',
                        'image' => 'https://via.placeholder.com/400x300/f39c12/ffffff?text=Team+Building',
                        'date' => '2024-01-05',
                        'photographer' => 'David Brown',
                        'views' => 945,
                        'likes' => 72,
                        'event' => 'Team Building'
                    ],
                    [
                        'title' => 'Office Anniversary',
                        'description' => 'Perayaan ulang tahun perusahaan ke-5',
                        'image' => 'https://via.placeholder.com/400x300/e74c3c/ffffff?text=Anniversary',
                        'date' => '2024-01-03',
                        'photographer' => 'Lisa Davis',
                        'views' => 1102,
                        'likes' => 95,
                        'event' => 'Company Anniversary'
                    ]
                ]
            ]
        ];

        $recentPhotos = [
            [
                'title' => 'Product Launch Event',
                'category' => 'Event',
                'date' => '2024-01-20',
                'icon' => 'bi-rocket'
            ],
            [
                'title' => 'Developer Meetup',
                'category' => 'Community',
                'date' => '2024-01-18',
                'icon' => 'bi-people'
            ],
            [
                'title' => 'Office Tour',
                'category' => 'Company',
                'date' => '2024-01-15',
                'icon' => 'bi-building'
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
