<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateValidateSlugOnStoreRequest;
use App\Model\Page\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

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
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * @param CreateValidateSlugOnStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CreateValidateSlugOnStoreRequest $request): RedirectResponse
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
     * @param Request $request
     * @param Page $page
     * @return RedirectResponse
     */
    public function update(Request $request, Page $page): RedirectResponse
    {
        $validated = $request->validate(
            [
                'slug' => 'required|min:3|unique:pages,slug'
            ]
        );

        $page->fill($validated);
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
     * @return Application|Factory|View
     */
    public function contact()
    {
        return view('page.contact');
    }
}
