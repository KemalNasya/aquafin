<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with(['category', 'user'])
            ->orderBy('created_at', 'desc')
            ->get();

        $categories = GalleryCategory::with(['galleries' => function($query) {
            $query->with('user')->orderBy('created_at', 'desc');
        }])->get()->map(function ($category) {
            $iconMap = [
                'Kolam Budidaya' => 'fas fa-water',
                'Varietas Ikan' => 'fas fa-fish',
                'Sertifikasi & Kualitas' => 'fas fa-certificate',
                'Panen & Distribusi' => 'fas fa-truck',
            ];

            $colorMap = [
                'Kolam Budidaya' => 'primary',
                'Varietas Ikan' => 'success',
                'Sertifikasi & Kualitas' => 'info',
                'Panen & Distribusi' => 'warning',
            ];

            return [
                'name' => $category->name,
                'icon' => $iconMap[$category->name] ?? 'fas fa-image',
                'color' => $colorMap[$category->name] ?? 'secondary',
                'photos' => $category->galleries->map(function ($gallery) {
                    return [
                        'title' => $gallery->title,
                        'description' => $gallery->description ?? '',
                        'image' => $gallery->photo ? asset('storage/' . $gallery->photo) : asset('assets/2.jpg'),
                        'date' => $gallery->created_at->format('Y-m-d'),
                        'photographer' => $gallery->user->name ?? 'Unknown Photographer',
                        'views' => rand(500, 2000), // Placeholder for views
                        'likes' => rand(20, 100), // Placeholder for likes
                        'event' => $gallery->category->name ?? 'Gallery'
                    ];
                })->toArray()
            ];
        })->toArray();

        $recentPhotos = $galleries->take(3)->map(function ($gallery) {
            $iconMap = [
                'Kolam Budidaya' => 'fas fa-water',
                'Varietas Ikan' => 'fas fa-fish',
                'Sertifikasi & Kualitas' => 'fas fa-certificate',
                'Panen & Distribusi' => 'fas fa-truck',
            ];

            return [
                'title' => $gallery->title,
                'category' => $gallery->category->name ?? 'Gallery',
                'date' => $gallery->created_at->format('Y-m-d'),
                'icon' => $iconMap[$gallery->category->name ?? ''] ?? 'fas fa-image'
            ];
        })->toArray();

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

        $galleries = Gallery::with(['category', 'user'])
            ->where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->orWhereHas('category', function($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        $categories = GalleryCategory::with(['galleries' => function($q) use ($query) {
            $q->with('user')
              ->where('title', 'like', '%' . $query . '%')
              ->orWhere('description', 'like', '%' . $query . '%')
              ->orderBy('created_at', 'desc');
        }])->get()->map(function ($category) {
            $iconMap = [
                'Kolam Budidaya' => 'fas fa-water',
                'Varietas Ikan' => 'fas fa-fish',
                'Sertifikasi & Kualitas' => 'fas fa-certificate',
                'Panen & Distribusi' => 'fas fa-truck',
            ];

            $colorMap = [
                'Kolam Budidaya' => 'primary',
                'Varietas Ikan' => 'success',
                'Sertifikasi & Kualitas' => 'info',
                'Panen & Distribusi' => 'warning',
            ];

            return [
                'name' => $category->name,
                'icon' => $iconMap[$category->name] ?? 'fas fa-image',
                'color' => $colorMap[$category->name] ?? 'secondary',
                'photos' => $category->galleries->map(function ($gallery) {
                    return [
                        'title' => $gallery->title,
                        'description' => $gallery->description ?? '',
                        'image' => $gallery->photo ? asset('storage/' . $gallery->photo) : asset('assets/2.jpg'),
                        'date' => $gallery->created_at->format('Y-m-d'),
                        'photographer' => $gallery->user->name ?? 'Unknown Photographer',
                        'views' => rand(500, 2000),
                        'likes' => rand(20, 100),
                        'event' => $gallery->category->name ?? 'Gallery'
                    ];
                })->toArray()
            ];
        })->toArray();

        $recentPhotos = $galleries->take(3)->map(function ($gallery) {
            $iconMap = [
                'Kolam Budidaya' => 'fas fa-water',
                'Varietas Ikan' => 'fas fa-fish',
                'Sertifikasi & Kualitas' => 'fas fa-certificate',
                'Panen & Distribusi' => 'fas fa-truck',
            ];

            return [
                'title' => $gallery->title,
                'category' => $gallery->category->name ?? 'Gallery',
                'date' => $gallery->created_at->format('Y-m-d'),
                'icon' => $iconMap[$gallery->category->name ?? ''] ?? 'fas fa-image'
            ];
        })->toArray();

        return view('gallery', compact('categories', 'recentPhotos', 'query'));
    }
}
