<?php

namespace App\Http\Controllers\Templates;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTemplateRequest;
use App\Model\Template\Template;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Storage;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = Template::paginate();

        return view('templates.index', compact('templates'));
    }

    public function adminIndex(Request $request)
    {
        $search = $request->query('s_by_title');

        if ($search) {
            $templates = Template::where('title', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%')
                ->paginate();
        } else {
            $templates = Template::paginate();
        }


        return view('admin.template.index', compact('templates', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.template.create');
    }


    /**
     * @param CreateTemplateRequest $request
     * @return RedirectResponse
     */
    public function store(CreateTemplateRequest $request): RedirectResponse
    {
        $template = new Template();

        $template->fill($request->all());

        if ($request->hasFile('img')) {
            $template->img = $request->file('img')
                ->store('images/templates/' . $request->slug);
        }

        if ($request->hasFile('img2')) {
            $template->img2 = $request->file('img2')
                ->store('images/templates/' . $request->slug);
        }

        $template->save();

        return redirect()->route('templates.admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Template $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        $template = Template::find($template->id);

        return view('templates.show', compact('template'));
    }

    /**
     * @param Template $template
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Template $template)
    {
        return view('admin.template.edit', compact('template'));
    }


    /**
     * @param Request $request
     * @param Template $template
     * @return RedirectResponse
     */
    public function update(Request $request, Template $template): RedirectResponse
    {
        //TODO Add middleware request for validation
        if ($request->has('img') && $request->img === '1') {
            Storage::delete($template->img);
            $template->img = '';
            $request->merge(['img' => '']);
        }

        if ($request->has('img2') && $request->img2 === '1') {
            Storage::delete($template->img2);
            $template->img2 = '';
            $request->merge(['img2' => '']);
        }


        $template->fill($request->all());


        $template->save();

        return redirect()->route('templates.admin.index');
    }

    /**
     * @param Template $template
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Template $template): RedirectResponse
    {
        //TODO Add middleware validation req, remove images and empty folders

        Storage::delete([$template->img, $template->img2]);
        Storage::deleteDirectory('images/templates/' . $template->slug);

        $template->delete();


        return redirect()->route('templates.admin.index');
    }
}
