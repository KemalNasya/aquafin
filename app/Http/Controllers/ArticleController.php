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
                'title' => 'Teknologi IoT dalam Monitoring Kualitas Air Budidaya Ikan',
                'excerpt' => 'Pelajari bagaimana sensor IoT dapat meningkatkan efisiensi dan kualitas budidaya ikan Anda.',
                'content' => 'Teknologi IoT telah merevolusi dunia budidaya ikan dengan memungkinkan monitoring real-time parameter kualitas air seperti pH, suhu, dan oksigen terlarut. Sistem ini membantu petani ikan mengambil keputusan yang tepat waktu untuk mencegah kerugian.',
                'author' => 'Dr. Ahmad Santoso',
                'author_image' => 'author1.jpg',
                'published_at' => '2024-01-20',
                'category' => 'Teknologi',
                'read_time' => '8 min read',
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&auto=format&fit=crop&q=80&ixlib=rb-4.0.3',
                'tags' => ['IoT', 'Monitoring', 'Budidaya Ikan']
            ],
            [
                'id' => 2,
                'title' => 'Optimasi Nutrisi Pakan untuk Pertumbuhan Ikan Maksimal',
                'excerpt' => 'Teknik-teknik formulasi pakan yang dapat meningkatkan pertumbuhan ikan secara signifikan.',
                'content' => 'Formulasi pakan yang tepat merupakan kunci sukses dalam budidaya ikan. Dengan memahami kebutuhan nutrisi spesies ikan tertentu, petani ikan dapat mengoptimalkan konversi pakan dan mengurangi limbah organik.',
                'author' => 'Ir. Siti Nurhaliza',
                'author_image' => 'author2.jpg',
                'published_at' => '2024-01-18',
                'category' => 'Nutrisi',
                'read_time' => '6 min read',
                'image' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800&auto=format&fit=crop&q=80&ixlib=rb-4.0.3',
                'tags' => ['Pakan', 'Nutrisi', 'Pertumbuhan']
            ],
            [
                'id' => 3,
                'title' => 'Sistem Budidaya Bioflok: Inovasi Berkelanjutan',
                'excerpt' => 'Panduan lengkap implementasi sistem bioflok untuk budidaya ikan yang efisien dan ramah lingkungan.',
                'content' => 'Sistem bioflok memanfaatkan mikroorganisme untuk mengolah limbah organik menjadi protein tambahan bagi ikan budidaya. Teknologi ini mengurangi kebutuhan air hingga 90% dan meningkatkan kepadatan tebar ikan.',
                'author' => 'Dr. Budi Prasetyo',
                'author_image' => 'author3.jpg',
                'published_at' => '2024-01-15',
                'category' => 'Inovasi',
                'read_time' => '10 min read',
                'image' => 'https://images.unsplash.com/photo-1501436513145-30f24e19fcc8?w=800&auto=format&fit=crop&q=80&ixlib=rb-4.0.3',
                'tags' => ['Bioflok', 'Berkelanjutan', 'Inovasi']
            ],
            [
                'id' => 4,
                'title' => 'Manajemen Penyakit Ikan dengan Pendekatan Preventif',
                'excerpt' => 'Praktik terbaik dalam pencegahan dan pengendalian penyakit pada budidaya ikan komersial.',
                'content' => 'Pencegahan penyakit lebih efektif daripada pengobatan. Dengan biosecurity yang ketat, monitoring kesehatan rutin, dan manajemen lingkungan yang baik, tingkat mortalitas dapat ditekan secara signifikan.',
                'author' => 'Dr. Rina Wijaya',
                'author_image' => 'author4.jpg',
                'published_at' => '2024-01-12',
                'category' => 'Kesehatan',
                'read_time' => '12 min read',
                'image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800&auto=format&fit=crop&q=80&ixlib=rb-4.0.3',
                'tags' => ['Penyakit', 'Biosecurity', 'Preventif']
            ]
        ];

        $categories = ['All', 'Teknologi', 'Nutrisi', 'Inovasi', 'Kesehatan', 'Budidaya', 'Lingkungan'];

        return view('article', compact('articles', 'categories'));
    }

    public function show($id)
    {
        // Logic untuk menampilkan single article
        return view('article-show', compact('id'));
    }
}
