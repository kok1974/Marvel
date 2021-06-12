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
        $novedades = Comic::orderBy('created_at', 'desc')->take(8)->get();

        return view('welcome', compact('novedades'));
    }
}
