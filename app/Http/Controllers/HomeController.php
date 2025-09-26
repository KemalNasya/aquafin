<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'title' => 'Teknologi Terbaru dalam Pengembangan Web',
                'excerpt' => 'Explore teknologi terkini yang digunakan dalam pengembangan web modern.',
                'date' => '2024-01-15',
                'category' => 'Technology'
            ],
            [
                'title' => 'Best Practices untuk Infrastruktur Cloud',
                'excerpt' => 'Pelajari cara mengoptimalkan infrastruktur cloud untuk bisnis Anda.',
                'date' => '2024-01-10',
                'category' => 'Cloud'
            ]
        ];

        $agendas = [
            [
                'title' => 'Webinar: Digital Transformation',
                'date' => '2024-02-01',
                'time' => '14:00 WIB',
                'location' => 'Online'
            ],
            [
                'title' => 'Workshop: Cloud Infrastructure',
                'date' => '2024-02-15',
                'time' => '09:00 WIB',
                'location' => 'Jakarta Convention Center'
            ]
        ];

        return view('welcome', compact('articles', 'agendas'));
    }
}
