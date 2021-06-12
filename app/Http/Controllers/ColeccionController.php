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

class ColeccionController extends Controller
{
    public function autores()
    {
        $user = auth()->id();
        $guionistas = Creator::join('comics','creators.creator_id', '=', 'comics.guionista_id')
                        ->join('comics_users', 'comics.comic_id', '=', 'comics_users.comic_id')
                        ->join('users', 'comics_users.user_id', '=', 'users.user_id')
                        ->where('users.user_id', $user)
                        ->select('creators.creator_id', 'creators.nombre', 'creators.apellidos')
                        ->distinct()
                        ->get();

        $dibujantes = Creator::join('comics','creators.creator_id', '=', 'comics.dibujante_id')
                        ->join('comics_users', 'comics.comic_id', '=', 'comics_users.comic_id')
                        ->join('users', 'comics_users.user_id', '=', 'users.user_id')
                        ->where('users.user_id', $user)
                        ->select('creators.creator_id', 'creators.nombre', 'creators.apellidos')
                        ->distinct()
                        ->get();

        return view('coleccion.autores-comics')->with(compact('guionistas','dibujantes'));
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

        return view('coleccion.autor')->with(compact('creador', 'comics'));
    }

    public function eventos()
    {
        $eventos = Event::orderBy('titulo')->get();

        return view('coleccion.eventos-comics')->with(compact('eventos'));
    }

    public function evento($id)
    {
        $evento = Event::find($id);
        $cabecera = $evento->imagen;
        $comicsEvento = $evento->comics()->get();

        return view('coleccion.evento')->with(compact('evento', 'comicsEvento','cabecera'));
    }

    public function series()
    {
        $series = Series::orderBy('titulo')->get();

        return view('coleccion.series-comics')->with(compact('series'));
    }

    public function serie($id)
    {
        $serie = Series::find($id);
        $cabecera = $serie->imagen;
        $comicsSerie = $serie->comics()->get();

        return view('coleccion.serie')->with(compact('serie','comicsSerie','cabecera'));
    }

    public function personajes()
    {
        $personajes = Character::orderBy('nombre')->get();

        return view('coleccion.personajes-comics')->with(compact('personajes'));
    }

    public function personaje($id)
    {
        $personaje = Character::find($id);
        $comicsPersonaje = $personaje->comics()->get();

        return view('coleccion.personaje')->with(compact('personaje','comicsPersonaje'));
    }

}
