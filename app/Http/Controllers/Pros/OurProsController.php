<?php

namespace App\Http\Controllers\Pros;

use App\Http\Controllers\Controller;
use App\Model\Pros\Pros;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Storage;

class OurProsController extends Controller
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

    public function adminIndex(Request $request)
    {
        $search = $request->query('s_by_title');

        if ($search) {
            $proses = Pros::where('title', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%')
                ->latest()->paginate();
        } else {
            $proses = Pros::latest()->paginate();
        }

        return view('admin.pros.index', compact('proses', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('admin.pros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(
            [
                'title' => 'required|min:3',
                'description' => 'required|min:3'
            ]
        );

        $pros = new Pros();

        $pros->fill($validated);

        if ($request->hasFile('img')) {
            $pros->img = $request->file('img')->store('images/pros/');
        }

        $pros->save();

        return redirect()->route('our-pros.edit', $pros)
            ->with('status', 'Created');
    }

    /**
     * Display the specified resource.
     *
     * @param Pros $pros
     * @return Response
     */
    public function show(Pros $pros): Response
    {
        //
    }


    /**
     * @param Pros $pros
     * @return Application|Factory|View
     */
    public function edit(Pros $pros)
    {
        return view('admin.pros.edit', compact('pros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Pros $pros
     * @return RedirectResponse
     */
    public function update(Request $request, Pros $pros): RedirectResponse
    {
        $validated = $request->validate(
            [
                'title' => 'required|min:3',
                'description' => 'required|min:3',
                'img' => 'sometimes|boolean'
            ]
        );


        // To remove img and img2
        if ($request->has('img') && $request->img === '1') {
            Storage::delete($pros->img);
            $request->merge(['img' => null]);
        }


        // Add new instead old img and img2
        if ($request->hasFile('image1')) {
            $pros->img = $request->file('image1')->store('images/pros/');
        }


        $pros->fill($request->all());
        $pros->save();

        return redirect()->route('our-pros.edit', $pros)
            ->with('status', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Pros $pros
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Pros $pros): RedirectResponse
    {
        Storage::delete($pros->img);

        $pros->delete();

        return redirect()->route('our-pros.admin.index');
    }
}
