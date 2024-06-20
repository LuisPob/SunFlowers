<?php

namespace App\Http\Controllers;

use App\Models\FooterContent;
use App\Models\FooterTitle;
use Illuminate\Http\Request;

/**
 * Class FooterContentController
 * @package App\Http\Controllers
 */
class FooterContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerContents = FooterContent::paginate();

        return view('footer-content.index', compact('footerContents'))
            ->with('i', (request()->input('page', 1) - 1) * $footerContents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footerContent = new FooterContent();
        $titles = FooterTitle::pluck('title', 'id');
        return view('footer-content.create', compact('footerContent', 'titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FooterContent::$rules);
        // dd($request->all());
        $footerContent = FooterContent::create($request->all());

        return redirect()->route('footer-content.index')
            ->with('success', 'FooterContent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $footerContent = FooterContent::find($id);

        return view('footer-content.show', compact('footerContent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footerContent = FooterContent::find($id);
        $titles = FooterTitle::pluck('title', 'id');

        return view('footer-content.edit', compact('footerContent', 'titles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FooterContent $footerContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterContent $footerContent)
    {
        request()->validate(FooterContent::$rules);

        $footerContent->update($request->all());

        return redirect()->route('footer-content.index')
            ->with('success', 'FooterContent updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $footerContent = FooterContent::find($id)->delete();

        return redirect()->route('footer-content.index')
            ->with('success', 'FooterContent deleted successfully');
    }
}
