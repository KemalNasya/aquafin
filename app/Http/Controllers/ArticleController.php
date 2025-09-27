<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category', 'user'])
            ->where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $articles = $posts->through(function ($post) {
            $wordCount = str_word_count(strip_tags($post->content));
            $readTime = ceil($wordCount / 200); // Assuming 200 words per minute

            return [
                'id' => $post->id,
                'title' => $post->title,
                'excerpt' => Str::limit(strip_tags($post->content), 150),
                'content' => $post->content,
                'author' => $post->user->name ?? 'Unknown Author',
                'author_image' => $post->user->profile_photo_path ?? 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop&crop=face',
                'published_at' => $post->published_at->format('Y-m-d'),
                'category' => $post->category->name ?? 'Uncategorized',
                'read_time' => $readTime . ' min read',
                'image' => $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('assets/2.jpg'),
                'tags' => [] // Add tags if needed later
            ];
        });

        $categories_for_filter = PostCategory::all()->pluck('name')->toArray();
        array_unshift($categories_for_filter, 'All');
        $categories = PostCategory::withCount('posts')->get();

        return view('article', compact('articles', 'categories'));
    }

    public function show($id)
    {
        $post = Post::with(['category', 'user'])->where('is_published', true)->findOrFail($id);

        $wordCount = str_word_count(strip_tags($post->content));
        $readTime = ceil($wordCount / 200); // Assuming 200 words per minute

        $article = [
            'id' => $post->id,
            'title' => $post->title,
            'content' => $post->content,
            'author' => $post->user->name ?? 'Unknown Author',
            'author_image' => $post->user->profile_photo_path ?? 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop&crop=face',
            'published_at' => $post->published_at->format('M d, Y'),
            'category' => $post->category->name ?? 'Uncategorized',
            'read_time' => $readTime . ' min read',
            'image' => $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('assets/2.jpg'),
            'tags' => [] // Add tags if needed later
        ];

        $relatedPosts = Post::with(['category', 'user'])
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get()
            ->map(function ($p) {
                return [
                    'id' => $p->id,
                    'title' => $p->title,
                    'excerpt' => Str::limit(strip_tags($p->content), 100),
                    'image' => $p->thumbnail ? asset('storage/' . $p->thumbnail) : asset('assets/2.jpg'),
                    'category' => $p->category->name ?? 'Uncategorized',
                ];
            });

        return view('article-show', compact('article', 'relatedPosts'));
    }
}
