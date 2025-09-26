<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'id' => 1,
                'title' => 'Pengenalan Microservices Architecture untuk Aplikasi Modern',
                'excerpt' => 'Pelajari bagaimana microservices architecture dapat meningkatkan skalabilitas dan maintainability aplikasi Anda.',
                'content' => 'Microservices architecture adalah pendekatan dalam pengembangan software di mana aplikasi dibangun sebagai kumpulan service yang kecil dan terpisah. Setiap service berjalan dalam prosesnya sendiri dan berkomunikasi melalui mekanisme ringan seperti API HTTP.',
                'author' => 'John Doe',
                'author_image' => 'author1.jpg',
                'published_at' => '2024-01-20',
                'category' => 'Architecture',
                'read_time' => '8 min read',
                'image' => 'https://via.placeholder.com/800x400',
                'tags' => ['Microservices', 'Architecture', 'Cloud']
            ],
            [
                'id' => 2,
                'title' => 'Optimasi Database untuk Aplikasi Web yang Scalable',
                'excerpt' => 'Teknik-teknik optimasi database yang dapat meningkatkan performa aplikasi web secara signifikan.',
                'content' => 'Optimasi database merupakan hal penting dalam pengembangan aplikasi web modern. Dengan jumlah data yang terus bertambah, performa database menjadi kritis untuk pengalaman pengguna yang baik.',
                'author' => 'Jane Smith',
                'author_image' => 'author2.jpg',
                'published_at' => '2024-01-18',
                'category' => 'Database',
                'read_time' => '6 min read',
                'image' => 'https://via.placeholder.com/800x400',
                'tags' => ['Database', 'Optimization', 'Performance']
            ],
            [
                'id' => 3,
                'title' => 'Implementasi CI/CD Pipeline dengan GitLab',
                'excerpt' => 'Panduan lengkap implementasi Continuous Integration dan Continuous Deployment menggunakan GitLab CI/CD.',
                'content' => 'CI/CD pipeline membantu tim development untuk mengirimkan kode lebih cepat dan dengan kualitas yang lebih baik. GitLab menyediakan tools yang powerful untuk implementasi pipeline yang efisien.',
                'author' => 'Mike Johnson',
                'author_image' => 'author3.jpg',
                'published_at' => '2024-01-15',
                'category' => 'DevOps',
                'read_time' => '10 min read',
                'image' => 'https://via.placeholder.com/800x400',
                'tags' => ['CI/CD', 'GitLab', 'DevOps']
            ],
            [
                'id' => 4,
                'title' => 'Best Practices untuk Kubernetes dalam Production',
                'excerpt' => 'Praktik terbaik dalam mengelola cluster Kubernetes untuk environment production yang stabil.',
                'content' => 'Kubernetes telah menjadi standar de facto untuk container orchestration. Namun, mengelola cluster Kubernetes di production membutuhkan pendekatan yang tepat untuk memastikan stabilitas dan keamanan.',
                'author' => 'Sarah Wilson',
                'author_image' => 'author4.jpg',
                'published_at' => '2024-01-12',
                'category' => 'Kubernetes',
                'read_time' => '12 min read',
                'image' => 'https://via.placeholder.com/800x400',
                'tags' => ['Kubernetes', 'Production', 'Best Practices']
            ]
        ];

        $categories = ['All', 'Architecture', 'Database', 'DevOps', 'Kubernetes', 'Cloud', 'Security'];

        return view('article', compact('articles', 'categories'));
    }

    public function show($id)
    {
        // Logic untuk menampilkan single article
        return view('article-show', compact('id'));
    }
}
