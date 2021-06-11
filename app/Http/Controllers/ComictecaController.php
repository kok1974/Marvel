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

    public function eventos()
    {
        $eventos = Event::orderBy('titulo')->get();

        return view('comicteca.eventos-comics')->with(compact('eventos'));
    }

    public function evento($id)
    {
        $evento = Event::find($id);
        $cabecera = $evento->imagen;
        $comicsEvento = $evento->comics()->get();

        return view('comicteca.evento')->with(compact('evento', 'comicsEvento','cabecera'));
    }

    public function series()
    {
        $series = Series::orderBy('titulo')->get();

        return view('comicteca.series-comics')->with(compact('series'));
    }

    public function serie($id)
    {
        $serie = Series::find($id);

        return view('comicteca.serie')->with(compact('serie'));
    }

    public function personajes()
    {
        $personajes = Character::orderBy('nombre')->get();

        return view('comicteca.personajes-comics')->with(compact('personajes'));
    }

    public function personaje($id)
    {
        $personaje = Character::find($id);

        return view('comicteca.personaje')->with(compact('personaje'));
    }

    public function comic($id)
    {
        $comic = Comic::find($id);

        return view('comicteca.comic')->with(compact('comic'));
    }
}
