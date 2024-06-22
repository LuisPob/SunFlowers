<?php

namespace App\Http\Controllers;

use App\Models\TypeEvent;
use Illuminate\Http\Request;

/**
 * Class TypeEventController
 * @package App\Http\Controllers
 */
class TypeEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeEvents = TypeEvent::paginate();

        return view('type-event.index', compact('typeEvents'))
            ->with('i', (request()->input('page', 1) - 1) * $typeEvents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeEvent = new TypeEvent();
        return view('type-event.create', compact('typeEvent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TypeEvent::$rules);

        $typeEvent = TypeEvent::create($request->all());

        return redirect()->route('type-events.index')
            ->with('success', 'TypeEvent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeEvent = TypeEvent::find($id);

        return view('type-event.show', compact('typeEvent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeEvent = TypeEvent::find($id);

        return view('type-event.edit', compact('typeEvent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TypeEvent $typeEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeEvent $typeEvent)
    {
        request()->validate(TypeEvent::$rules);

        $typeEvent->update($request->all());

        return redirect()->route('type-events.index')
            ->with('success', 'TypeEvent updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $typeEvent = TypeEvent::find($id)->delete();

        return redirect()->route('type-events.index')
            ->with('success', 'TypeEvent deleted successfully');
    }
}
