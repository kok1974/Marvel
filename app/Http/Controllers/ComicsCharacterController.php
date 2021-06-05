<?php

namespace App\Http\Controllers;

use App\ComicsCharacter;
use Illuminate\Http\Request;

/**
 * Class ComicsCharacterController
 * @package App\Http\Controllers
 */
class ComicsCharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicsCharacters = ComicsCharacter::paginate();

        return view('comics-character.index', compact('comicsCharacters'))
            ->with('i', (request()->input('page', 1) - 1) * $comicsCharacters->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comicsCharacter = new ComicsCharacter();
        return view('comics-character.create', compact('comicsCharacter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ComicsCharacter::$rules);

        $comicsCharacter = ComicsCharacter::create($request->all());

        return redirect()->route('comics-characters.index')
            ->with('success', 'ComicsCharacter created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comicsCharacter = ComicsCharacter::find($id);

        return view('comics-character.show', compact('comicsCharacter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comicsCharacter = ComicsCharacter::find($id);

        return view('comics-character.edit', compact('comicsCharacter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ComicsCharacter $comicsCharacter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComicsCharacter $comicsCharacter)
    {
        request()->validate(ComicsCharacter::$rules);

        $comicsCharacter->update($request->all());

        return redirect()->route('comics-characters.index')
            ->with('success', 'ComicsCharacter updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comicsCharacter = ComicsCharacter::find($id)->delete();

        return redirect()->route('comics-characters.index')
            ->with('success', 'ComicsCharacter deleted successfully');
    }
}
