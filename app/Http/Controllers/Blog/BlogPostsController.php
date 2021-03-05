<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Model\Blog\BlogCategories;
use App\Model\Blog\BlogPost;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $posts = BlogPost::paginate();

        //For sidebar template
        $recent = BlogPost::latest()->take(5)->get();
        $cats = BlogCategories::all();

        return view(
            'blog.main-blog',
            compact('posts', 'recent', 'cats')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param BlogPost $blog
     * @return Application|Factory|Response|View
     */
    public function show(BlogPost $blog)
    {
        $prevPost = BlogPost::find($blog->id - 1);
        $nextPost = BlogPost::find($blog->id + 1);


        //TODO remove test data
        $comments = [
            [
                'author' => 'Alex B',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptate?',
                'created_at' => '04-02-2020'
            ],
            [
                'author' => 'Alex B',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptate?',
                'created_at' => '04-02-2020'
            ],
            [
                'author' => 'Alex B',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptate?',
                'created_at' => '04-02-2020'
            ],
            [
                'author' => 'Alex B',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptate?',
                'created_at' => '04-02-2020'
            ],
            [
                'author' => 'Alex B',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptate?',
                'created_at' => '04-02-2020'
            ],
            [
                'author' => 'Alex B',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptate?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptate?',
                'created_at' => '04-02-2020'
            ],
        ];


        $comments = json_decode(json_encode($comments));


        //For sidebar template
        $cats = BlogCategories::all();
        $recent = BlogPost::latest()->take(5)->get();

        return view(
            'blog.blog-single',
            compact('blog', 'cats', 'recent', 'prevPost', 'nextPost', 'comments')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BlogPost $blog
     * @return Response
     */
    public function edit(BlogPost $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param BlogPost $blog
     * @return Response
     */
    public function update(Request $request, BlogPost $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param BlogPost $blog
     * @return Response
     */
    public function destroy(BlogPost $blog)
    {
        //
    }
}
