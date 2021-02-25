<?php

namespace App\Http\Controllers\Prices;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use App\Model\Price\Price;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Storage;

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
     * @param CreatePriceRequest $request
     * @return RedirectResponse
     */
    public function store(CreatePriceRequest $request): RedirectResponse
    {
        $price = new Price();
        $price->fill($request->all());

        if ($request->hasFile('img')) {
            $price->img = $request->file('img')
                ->store('images/prices/' . $request->slug);
        }


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


    public function update(UpdatePriceRequest $request, Price $price): RedirectResponse
    {
        // To remove img and img2
        if ($request->has('img') && $request->img === 1) {
            Storage::delete($price->img);
            $request->merge(['img' => null]);
        }


        // Add new instead old img and img2
        if ($request->hasFile('image1')) {
            $price->img = $request->file('image1')
                ->store('images/prices/' . $request->slug);
        }


        $price->fill($request->all());
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
