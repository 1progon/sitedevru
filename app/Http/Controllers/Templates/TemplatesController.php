<?php

namespace App\Http\Controllers\Templates;

use App\Http\Controllers\Controller;
use App\Model\Template\Template;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Description;

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

    public function adminIndex()
    {
        $templates = Template::paginate();

        return view('admin.template.index', compact('templates'));
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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $template = new Template();
        $template->fill($request->all());
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
     */
    public function update(Request $request, Template $template)
    {
        $template->fill($request->all());
        $template->save();

        return redirect()->route('templates.admin.index');
    }

    /**
     * @param Template $template
     */
    public function destroy(Template $template)
    {
        //TODO Add remove images etc..
        $template->delete();

        return redirect()->route('templates.admin.index');
    }
}
