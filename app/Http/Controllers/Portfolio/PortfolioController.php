<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Model\Portfolio\Portfolio;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Storage;

class PortfolioController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $portfolios = Portfolio::paginate();

        return view('portfolio.index', compact('portfolios'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function adminIndex(Request $request)
    {
        $search = $request->query('s_by_title');

        if ($search) {
            $portfolios = Portfolio::where('title', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%')
                ->paginate();
        } else {
            $portfolios = Portfolio::paginate();
        }


        return view('admin.portfolio.index', compact('portfolios', 'search'));
    }


    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }


    /**
     * @param CreatePortfolioRequest $request
     * @return RedirectResponse
     */
    public function store(CreatePortfolioRequest $request): RedirectResponse
    {
        $portfolio = new Portfolio();
        $portfolio->fill($request->all());


        if ($request->hasFile('img')) {
            $portfolio->img = $request->file('img')->store('images/portfolio');
        }

        if ($request->hasFile('img2')) {
            $portfolio->img2 = $request->file('img2')->store('images/portfolio');
        }

        if ($request->hasFile('img3')) {
            $portfolio->img3 = $request->file('img3')->store('images/portfolio');
        }


        $portfolio->save();

        return redirect()->route('portfolio.edit', $portfolio)
            ->with('status', 'Created');
    }


    /**
     * @param Portfolio $portfolio
     * @return Application|Factory|View
     */
    public function show(Portfolio $portfolio)
    {
        //TODO Hardcoded dummy data
        //Need min one part, 3-4 optimal
        $portfolioParts = [
            [
                'img' => 'https://preview.uideck.com/items/agency/assets/images/feature-icon-1.png',
                'title' => 'Some title',
                'text' => 'Some text'
            ],
        ];
        $portfolioParts = json_decode(json_encode($portfolioParts), false);


        return view('portfolio.show', compact('portfolio', 'portfolioParts'));
    }


    /**
     * @param Portfolio $portfolio
     * @return Application|Factory|View
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }


    /**
     * @param UpdatePortfolioRequest $request
     * @param Portfolio $portfolio
     * @return RedirectResponse
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio): RedirectResponse
    {
        if ($request->has('img') && $request->img === 1) {
            Storage::delete($portfolio->img);
            $request->merge(['img' => null]);
        }

        if ($request->has('img2') && $request->img2 === 1) {
            Storage::delete($portfolio->img2);
            $request->merge(['img2' => null]);
        }

        if ($request->has('img3') && $request->img3 === 1) {
            Storage::delete($portfolio->img3);
            $request->merge(['img3' => null]);
        }

        if ($request->hasFile('image1')) {
            $portfolio->img = $request->file('image1')->store('images/portfolio');
        }
        if ($request->hasFile('image2')) {
            $portfolio->img2 = $request->file('image2')->store('images/portfolio');
        }
        if ($request->hasFile('image3')) {
            $portfolio->img3 = $request->file('image3')->store('images/portfolio');
        }


        $portfolio->fill($request->all());
        $portfolio->save();

        return redirect()->route('portfolio.edit', $portfolio)
            ->with('status', 'Updated');
    }


    /**
     * @param Portfolio $portfolio
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Portfolio $portfolio): RedirectResponse
    {
        //TODO Logic to remove images and folders
        $portfolio->delete();

        return redirect()->route('portfolio.admin.index');
    }
}
