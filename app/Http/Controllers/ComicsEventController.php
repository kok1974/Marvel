<?php

namespace App\Http\Controllers;

use App\Models\ComicsEvent;
use Illuminate\Http\Request;

/**
 * Class ComicsEventController
 * @package App\Http\Controllers
 */
class ComicsEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicsEvents = ComicsEvent::paginate();

        return view('comics-event.index', compact('comicsEvents'))
            ->with('i', (request()->input('page', 1) - 1) * $comicsEvents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comicsEvent = new ComicsEvent();
        return view('comics-event.create', compact('comicsEvent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ComicsEvent::$rules);

        $comicsEvent = ComicsEvent::create($request->all());

        return redirect()->route('comics-events.index')
            ->with('success', 'ComicsEvent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comicsEvent = ComicsEvent::find($id);

        return view('comics-event.show', compact('comicsEvent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comicsEvent = ComicsEvent::find($id);

        return view('comics-event.edit', compact('comicsEvent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ComicsEvent $comicsEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComicsEvent $comicsEvent)
    {
        request()->validate(ComicsEvent::$rules);

        $comicsEvent->update($request->all());

        return redirect()->route('comics-events.index')
            ->with('success', 'ComicsEvent updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comicsEvent = ComicsEvent::find($id)->delete();

        return redirect()->route('comics-events.index')
            ->with('success', 'ComicsEvent deleted successfully');
    }
}
