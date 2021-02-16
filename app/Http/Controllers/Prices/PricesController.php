<?php

namespace App\Http\Controllers\Prices;

use App\Http\Controllers\Controller;
use App\Model\Price\Price;
use Illuminate\Http\Request;

class PricesController extends Controller
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

    public function adminIndex()
    {
        $prices = Price::paginate();
        return view('admin.price.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.price.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO Logic

        return redirect()->route('prices.admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Model\Price\Price $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Model\Price\Price $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        return view('admin.price.edit', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Model\Price\Price $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        //TODO Logic

        return redirect()->route('prices.admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Model\Price\Price $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        $removed = $price->delete();

        //TODO Remove logic and remove images

        return redirect()->route('prices.admin.index');
    }
}
