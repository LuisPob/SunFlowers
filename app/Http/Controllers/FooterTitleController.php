<?php

namespace App\Http\Controllers;

use App\Models\FooterTitle;
use Illuminate\Http\Request;

/**
 * Class FooterTitleController
 * @package App\Http\Controllers
 */
class FooterTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerTitles = FooterTitle::paginate();

        return view('footer-title.index', compact('footerTitles'))
            ->with('i', (request()->input('page', 1) - 1) * $footerTitles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footerTitle = new FooterTitle();
        return view('footer-title.create', compact('footerTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FooterTitle::$rules);

        $footerTitle = FooterTitle::create($request->all());

        return redirect()->route('footer-title.index')
            ->with('success', 'FooterTitle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $footerTitle = FooterTitle::find($id);

        return view('footer-title.show', compact('footerTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footerTitle = FooterTitle::find($id);

        return view('footer-title.edit', compact('footerTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FooterTitle $footerTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterTitle $footerTitle)
    {
        request()->validate(FooterTitle::$rules);

        $footerTitle->update($request->all());

        return redirect()->route('footer-title.index')
            ->with('success', 'FooterTitle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $footerTitle = FooterTitle::find($id)->delete();

        return redirect()->route('footer-title.index')
            ->with('success', 'FooterTitle deleted successfully');
    }
}
