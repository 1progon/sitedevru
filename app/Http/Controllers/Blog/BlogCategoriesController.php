<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Model\Blog\BlogCategories;
use App\Model\Blog\BlogPost;
use Illuminate\Http\Request;


class BlogCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param BlogCategories $blogcat
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(BlogCategories $blogcat)
    {

        $posts = $blogcat->posts()->paginate();

        //For sidebar template
        $cats = BlogCategories::all();
        $recent = BlogPost::latest()->take(5)->get();

        return view('blog.cat-show', compact('blogcat', 'posts', 'cats', 'recent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategories $blogcat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategories $blogcat)
    {
        //
    }


    /**
     * @param BlogCategories $blogcat
     */
    public function destroy(BlogCategories $blogcat)
    {
        //
    }
}
