<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateValidateSlugOnStoreRequest;
use App\Model\Page\Page;
use App\Model\Service\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate();

        return view('service.index', compact('services'));
    }

    public function adminIndex(Request $request)
    {
        $search = $request->query('s_by_title');

        if ($search) {
            $services = Service::where('title', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%')
                ->paginate();
        } else {
            $services = Service::paginate();
        }

        return view('admin.service.index', compact('services', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateValidateSlugOnStoreRequest $request)
    {
        $service = new Service();
        $service->fill($request->all());
        $service->save();

        return redirect()->route('services.admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $service = Service::find($service->id);

        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }


    /**
     * @param Request $request
     * @param Service $service
     * @return RedirectResponse
     */
    public function update(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate(
            [
                'slug' => 'required|min:3|unique:pages,slug'
            ]
        );

        $service->fill($validated);
        $service->save();


        return redirect()->route('services.admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //TODO Add remove images
        $service->delete();

        return redirect()->route('services.admin.index');
    }
}
