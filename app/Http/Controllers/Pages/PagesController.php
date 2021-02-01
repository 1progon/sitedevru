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

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     * @return void
     */
    public function destroy(Page $page)
    {
        //
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
