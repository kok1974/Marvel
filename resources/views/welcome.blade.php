@extends('layouts.app')

@section('content')

    @include('partials.carrusel')

    <div class="cuerpo">
        <section>
            <div class="container mt-5 pb-5 justify-content-center">
                <div class="text-center pt-5">
                    <h2>Novedades</h2>
                </div>

                <div class="row pt-5">
                    @foreach ($novedades as $comic)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
                            <div class="pb-3">
                                <a href="{{ url('comiteca/comic/'.$comic->comic_id ) }}">
                                    <img class="img img-fluid centrandoImagen mb-3" src="{{ $comic->imagen.'/portrait_incredible.'.$comic->mime}}" alt="{{$comic->titulo}}">
                                </a>
                            </div>
                            <div class="text-center"><h6><a class="colorOficial" href="{{ url('comiteca/comic/'.$comic->comic_id ) }}">{{$comic->titulo}}</a></h6></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection

