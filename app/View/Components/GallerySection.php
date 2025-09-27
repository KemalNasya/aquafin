<?php

namespace App\View\Components;

use App\Models\Gallery;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GallerySection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $galleries = Gallery::with(['category', 'user'])
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $latestPhotos = $galleries->map(function ($gallery) {
            return [
                'id' => $gallery->id,
                'title' => $gallery->title,
                'image' => $gallery->photo ? asset('storage/' . $gallery->photo) : asset('assets/2.jpg'),
                'category' => $gallery->category->name ?? 'Gallery',
                'date' => $gallery->created_at->format('Y-m-d'),
            ];
        });

        return view('components.gallery-section', compact('latestPhotos'));
    }
}
