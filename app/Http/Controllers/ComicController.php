<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

/**
 * Class ComicController
 * @package App\Http\Controllers
 */
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate();

        return view('comic.index', compact('comics'))
            ->with('i', (request()->input('page', 1) - 1) * $comics->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic = new Comic();
        return view('comic.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Comic::$rules);

        $comic = Comic::create($request->all());

        return redirect()->route('comics.index')
            ->with('success', 'Comic created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        request()->validate(Comic::$rules);

        $comic->update($request->all());

        return redirect()->route('comics.index')
            ->with('success', 'Comic updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comic = Comic::find($id)->delete();

        return redirect()->route('comics.index')
            ->with('success', 'Comic deleted successfully');
    }
}
