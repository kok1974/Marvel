@extends('layouts.app')

@section('content')
    <div class="cuerpo">
        <script>
            var imagen = '<?php echo $cabecera; ?>';
            document.documentElement.style.setProperty("--after-background", "linear-gradient(to right, rgba(30, 67, 86, 0.8), rgba(30, 67, 86, 0.6)), url("+imagen+") center top no-repeat");
        </script>
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <div id="inicio" class="container position-relative m-auto" style="z-index: 10;">
                <h2 class="text-justify pb-3 text-white">{{$evento->titulo}}</h2>
                <h5 class="text-justify text-white">{{($evento->descripcion)}}</h5>
            </div>
        </section>
        <section>
            <div class="container justify-content-center">
                <div class="row pt-5">
                    <div class="col-12 mb-5">
                        <h2 class="text-center">Comics</h2>
                    </div>
                    @foreach ($comicsEvento as $comic)
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

                <div class="row pt-5">
                    <div class="col-12 mb-5">
                        <h2 class="text-center">Series en este evento</h2>
                    </div>
                    @foreach ($comicsEvento->unique('serie_id') as $comic)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
                            <div class="pb-3">
                                <a href="{{ url('comiteca/serie/'.$comic->serie->serie_id ) }}">
                                    <img class="img img-fluid centrandoImagen mb-3" src="{{ $comic->serie->imagen.'/portrait_incredible.'.$comic->serie->mime}}" alt="{{$comic->serie->titulo}}">
                                 </a>
                            </div>
                            <div class="text-center"><h6><a class="colorOficial" href="{{ url('comiteca/comic/'.$comic->serie->serie_id ) }}">{{$comic->serie->titulo}}</a></h6></div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </div>

@endsection
