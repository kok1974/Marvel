<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\ComicsUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $novedades = Comic::orderBy('created_at')->take(8)->get();
        /* $busquedas = ComicsUser::selectRaw('COUNT(comic_id) AS Conteo, comic_id')
                        ->groupBy('comic_id')->orderBy('Conteo','desc')->take(4)->get()->makeHidden(['Conteo']); */

        //compact('busquedas');

      //  $comicsid[] = Comic::find(2);

     // $busquedas = Comic::withCount('coleccion')->get();          Lo ultimo
     /*    foreach ($busquedas as $busqueda){


           $comicsid = Comic::find($busqueda['comics_id']);

        } */

    //$busquedas = ComicsUser::count('comics_id')->orderBy;


        return view('welcome', compact('novedades'));
    }
}
