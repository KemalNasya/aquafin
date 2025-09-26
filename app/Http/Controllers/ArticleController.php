<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'title' => 'Pengenalan Microservices Architecture',
                'content' => 'Microservices architecture adalah pendekatan dalam pengembangan software...',
                'author' => 'John Doe',
                'published_at' => '2024-01-20',
                'category' => 'Architecture'
            ],
            [
                'title' => 'Optimasi Database untuk Aplikasi Web',
                'content' => 'Optimasi database merupakan hal penting dalam pengembangan aplikasi web...',
                'author' => 'Jane Smith',
                'published_at' => '2024-01-18',
                'category' => 'Database'
            ]
        ];

        return view('article', compact('articles'));
    }
}
