<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with(['category', 'user'])
            ->where('is_published', true);

        // Filter by category if provided
        if ($request->has('category') && $request->category !== 'all') {
            $category = PostCategory::where('slug', $request->category)->first();
            if ($category) {
                $query->where('post_category_id', $category->id);
            }
        }

        $posts = $query->orderBy('published_at', 'desc')->paginate(10);

        $articles = $posts->through(function ($post) {
            $wordCount = str_word_count(strip_tags($post->content));
            // More accurate reading speed for Indonesian text (150-180 words per minute)
            $readTime = max(1, ceil($wordCount / 150)); // Minimum 1 minute, assuming 150 words per minute

            return [
                'id' => $post->id,
                'slug' => $post->slug,
                'title' => $post->title,
                'excerpt' => Str::limit(strip_tags($post->content), 150),
                'content' => $post->content,
                'author' => $post->user->name ?? 'Unknown Author',
                'author_image' => $post->user->profile_photo_path ?? 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop&crop=face',
                'published_at' => $post->published_at,
                'category' => $post->category->name ?? 'Uncategorized',
                'read_time' => $readTime . ' menit baca',
                'image' => $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('assets/2.jpg'),
                'tags' => [] // Add tags if needed later
            ];
        });

        $categories_for_filter = PostCategory::all()->pluck('name')->toArray();
        array_unshift($categories_for_filter, 'All');
        $categories = PostCategory::withCount('posts')->get();

        return view('article', compact('articles', 'categories'));
    }

    public function show($slug)
    {
        $post = Post::with(['category', 'user'])->where('is_published', true)->where('slug', $slug)->firstOrFail();

        $wordCount = str_word_count(strip_tags($post->content));
        // More accurate reading speed for Indonesian text (150-180 words per minute)
        $readTime = max(1, ceil($wordCount / 150)); // Minimum 1 minute, assuming 150 words per minute

        $article = [
            'id' => $post->id,
            'slug' => $post->slug,
            'title' => $post->title,
            'content' => $post->content,
            'author' => $post->user->name ?? 'Unknown Author',
            'author_image' => $post->user->profile_photo_path ?? 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop&crop=face',
            'published_at' => $post->published_at,
            'category' => $post->category->name ?? 'Uncategorized',
            'read_time' => $readTime . ' menit baca',
            'image' => $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('assets/2.jpg'),
            'tags' => [] // Add tags if needed later
        ];

        $relatedPosts = Post::with(['category', 'user'])
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get()
            ->map(function ($post) {
                $wordCount = str_word_count(strip_tags($post->content));
                // More accurate reading speed for Indonesian text (150-180 words per minute)
                $readTime = max(1, ceil($wordCount / 150)); // Minimum 1 minute, assuming 150 words per minute

                return [
                    'id' => $post->id,
                    'slug' => $post->slug,
                    'title' => $post->title,
                    'excerpt' => Str::limit(strip_tags($post->content), 150),
                    'image' => $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('assets/2.jpg'),
                    'category' => $post->category->name ?? 'Uncategorized',
                    'read_time' => $readTime . ' menit baca',
                    'published_at' => $post->published_at,
                ];
            });

        return view('article-show', compact('article', 'relatedPosts'));
    }
}
