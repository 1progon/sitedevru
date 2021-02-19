<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Model\Page\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PagesController extends Controller
{

    public function index()
    {
        //
    }

    public function adminIndex(Request $request)
    {
        $search = $request->query('s_by_title');

        if ($search) {
            $pages = Page::where('title', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%')
                ->paginate();
        } else {
            $pages = Page::paginate();
        }


        return view('admin.page.index', compact('pages', 'search'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * @param CreatePageRequest $request
     * @return RedirectResponse
     */
    public function store(CreatePageRequest $request): RedirectResponse
    {
        $page = new Page();
        $page->fill($request->validated());
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
     * @param Page $page
     * @return Application|Factory|View
     */
    public function edit(Page $page): View
    {
        return view('admin.page.edit', compact('page'));
    }


    /**
     * @param UpdatePageRequest $request
     * @param Page $page
     * @return RedirectResponse
     */
    public function update(UpdatePageRequest $request, Page $page): RedirectResponse
    {
        $page->fill($request->validated());
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
