<?php

namespace App\Http\Controllers;

use App\Models\ComicsUser;
use Illuminate\Http\Request;

/**
 * Class ComicsUserController
 * @package App\Http\Controllers
 */
class ComicsUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicsUsers = ComicsUser::paginate();

        return view('comics-user.index', compact('comicsUsers'))
            ->with('i', (request()->input('page', 1) - 1) * $comicsUsers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comicsUser = new ComicsUser();
        return view('comics-user.create', compact('comicsUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ComicsUser::$rules);

        $comicsUser = ComicsUser::create($request->all());

        return redirect()->route('comics-users.index')
            ->with('success', 'ComicsUser created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($comicsUser)
    {
        return view('comics-user.show', compact('comicsUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comicsUser = ComicsUser::find($id);

        return view('comics-user.edit', compact('comicsUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ComicsUser $comicsUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComicsUser $comicsUser)
    {
        request()->validate(ComicsUser::$rules);

        $comicsUser->update($request->all());

        return redirect()->route('comics-users.index')
            ->with('success', 'ComicsUser updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comicsUser = ComicsUser::find($id)->delete();

        return redirect()->route('comics-users.index')
            ->with('success', 'ComicsUser deleted successfully');
    }
}
