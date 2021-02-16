<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Model\Page\Page;
use App\Model\Price\Price;
use App\Model\Service\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    }

    public function adminIndex()
    {
        $pages = Page::paginate();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page->fill($request->all());
        $page->save();

        return redirect()->route('pages.admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Page $page
     * @return Application|Factory|Response|View
     */
    public function show(Page $page)
    {
        return view('page.single', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Page $page
     * @return Response
     */
    public function edit(Page $page)
    {
        return view('admin.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Page $page
     * @return void
     */
    public function update(Request $request, Page $page)
    {
        $page->fill($request->all());
        $page->save();

        return redirect()->route('pages.admin.index', $page);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     * @return void
     */
    public function destroy(Page $page)
    {
        //TODO Need delete images and other content
        $removed = $page->delete();

        return redirect()->route('pages.admin.index');
    }


    /**
     * @Annotation Pricing Page
     * @return Application|Factory|View
     */
    public function pricing()
    {
        $prices = Price::paginate();

        return view('page.pricing', compact('prices'));
    }


    /**
     * @return Application|Factory|View
     */
    public function contact()
    {
        return view('page.contact');
    }
}
