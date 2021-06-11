@extends('layouts.app')

@section('content')

    <div class="cuerpo">
         <section>
             <div class="container-fluid p-4" style="background-color: #E3E3DF">
                <div class="row px-5">
                    <div class="col-12 col-sm-5 col-md-5 col-lg-3">
                        <div class="pb-3">
                                <img class="img img-fluid centrandoImagen mb-3" src="{{ $serie->imagen.'/detail.'.$serie->mime}}" alt="{{$serie->titulo}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-md-7 col-lg-9">
                        <div id="inicio" class="text">
                            <h2 class="text-justify m-3 pb-3 ">{{$serie->titulo}}</h2>
                            <h5 class="text-justify m-3">{{($serie->descripcion)}}</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container justify-content-center mt-5">
                <div class="col-12">
                    <h2 class="text-center">Comics</h2>
                </div>
                <div class="row py-5">
                    @foreach ($comicsSerie as $comic)
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
