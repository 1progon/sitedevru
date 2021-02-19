<?php

namespace App\Http\Controllers\Prices;

use App\Http\Controllers\Controller;
use App\Model\Price\Price;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $prices = Price::paginate();

        return view('price.index', compact('prices'));
    }

    public function adminIndex(Request $request)
    {
        $search = $request->query('s_by_title');

        if ($search) {
            $prices = Price::where('title', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%')
                ->paginate();
        } else {
            $prices = Price::paginate();
        }

        return view('admin.price.index', compact('prices', 'search'));
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

        //TODO validation need
        $price = new Price();
        $price->fill($request->all());
        $price->save();

        return redirect()->route('prices.admin.index');
    }


    /**
     * @param Price $price
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Price $price)
    {
        return view('price.show', compact('price'));
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
     * @param Request $request
     * @param Price $price
     * @return RedirectResponse
     */
    public function update(Request $request, Price $price): RedirectResponse
    {
        //TODO validation need
        $validated = $request->validate(
            [
                'slug' => 'required|min:3|unique:pages,slug'
            ]
        );

        $price->fill($validated);
        $price->save();
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
