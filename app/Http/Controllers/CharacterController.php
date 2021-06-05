<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

/**
 * Class CharacterController
 * @package App\Http\Controllers
 */
class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::paginate();

        return view('character.index', compact('characters'))
            ->with('i', (request()->input('page', 1) - 1) * $characters->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $character = new Character();
        return view('character.create', compact('character'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Character::$rules);

        $character = Character::create($request->all());

        return redirect()->route('characters.index')
            ->with('success', 'Character created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::find($id);

        return view('character.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = Character::find($id);

        return view('character.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Character $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        request()->validate(Character::$rules);

        $character->update($request->all());

        return redirect()->route('characters.index')
            ->with('success', 'Character updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $character = Character::find($id)->delete();

        return redirect()->route('characters.index')
            ->with('success', 'Character deleted successfully');
    }
}
