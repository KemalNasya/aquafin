<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class ArticleSection extends Component
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
        $posts = Post::with(['category', 'user'])
            ->where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        $featuredArticles = $posts->map(function ($post) {
            $wordCount = str_word_count(strip_tags($post->content));
            $readTime = ceil($wordCount / 200); // Assuming 200 words per minute

            return [
                'id' => $post->id,
                'title' => $post->title,
                'excerpt' => Str::limit(strip_tags($post->content), 150),
                'author' => $post->user->name ?? 'Unknown Author',
                'published_at' => $post->published_at->format('Y-m-d'),
                'category' => $post->category->name ?? 'Uncategorized',
                'read_time' => $readTime . ' min read',
                'image' => $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('assets/2.jpg'),
            ];
        });

        return view('components.article-section', compact('featuredArticles'));
    }
}
