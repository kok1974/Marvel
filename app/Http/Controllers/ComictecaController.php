<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Comic;
use App\Models\ComicsCharacter;
use App\Models\ComicsEvent;
use App\Models\ComicsUser;
use App\Models\Creator;
use App\Models\Event;
use App\Models\Series;
use App\Models\User;


class ComictecaController extends Controller
{
    public function autores()
    {
        $autores = Creator::orderBy('nombre')->get();
        $guionistas = $autores->where('tipo','like', 'guionista');
        $dibujantes = $autores->where('tipo','like', 'dibujante');

        return view('comicteca.autores-comics')->with(compact('autores','guionistas','dibujantes'));
    }

    public function autor($id)
    {
        $creador = Creator::find($id);

        if($creador->tipo == 'guionista'){
            $comics= $creador->comicsWriter()->get();
        }
        else{
            $comics= $creador->comicsPenciller()->get();
        }

        return view('comicteca.autor')->with(compact('creador', 'comics'));
    }


}
