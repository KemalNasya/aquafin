<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index()
    {
        $documents = [
            [
                'title' => 'User Manual',
                'description' => 'Panduan penggunaan aplikasi untuk end-user',
                'file_type' => 'PDF',
                'size' => '2.5 MB'
            ],
            [
                'title' => 'API Documentation',
                'description' => 'Dokumentasi lengkap untuk API integration',
                'file_type' => 'PDF',
                'size' => '1.8 MB'
            ]
        ];

        return view('documentation', compact('documents'));
    }
}
