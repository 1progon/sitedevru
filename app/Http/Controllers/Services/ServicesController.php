<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Model\Service\Service;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Storage;

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
     * @param CreateServiceRequest $request
     * @return RedirectResponse
     */
    public function store(CreateServiceRequest $request): RedirectResponse
    {
        $service = new Service();
        $service->fill($request->all());

        if ($request->hasFile('img')) {
            $service->img = $request->file('img')
                ->store('images/services/' . $request->slug);
        }

        if ($request->hasFile('img2')) {
            $service->img2 = $request->file('img2')
                ->store('images/services/' . $request->slug);
        }


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
     * @param UpdateServiceRequest $request
     * @param Service $service
     * @return RedirectResponse
     */
    public function update(UpdateServiceRequest $request, Service $service): RedirectResponse
    {
        // To remove img and img2
        if ($request->has('img') && $request->img === 1) {
            Storage::delete($service->img);
            $request->merge(['img' => null]);
        }

        if ($request->has('img2') && $request->img2 === 1) {
            Storage::delete($service->img2);
            $request->merge(['img2' => null]);
        }


        // Add new instead old img and img2
        if ($request->hasFile('image1')) {
            $service->img = $request->file('image1')
                ->store('images/services/' . $request->slug);
        }

        if ($request->hasFile('image2')) {
            $service->img2 = $request->file('image2')
                ->store('images/services/' . $request->slug);
        }


        $service->fill($request->all());
        $service->save();


        return redirect()->route('services.admin.index');
    }


    /**
     * @param Service $service
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Service $service): RedirectResponse
    {
        //TODO Add remove images
        Storage::delete([$service->img, $service->img2]);
        Storage::deleteDirectory('images/templates/' . $service->slug);

        $service->delete();

        return redirect()->route('services.admin.index');
    }
}
