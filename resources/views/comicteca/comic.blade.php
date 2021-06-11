@extends('layouts.app')

@section('content')

    <div class="cuerpo">
        <section>
            <div class="container-fluid p-5" style="background-color: #E3E3DF">
                <div class="row px-5">
                    <div class="col-12 col-md-5 col-lg-3">
                        <div class="pb-3">
                                <img class="img img-fluid centrandoImagen mb-3" src="{{ $comic->imagen.'/portrait_uncanny.'.$comic->mime}}" alt="{{$comic->titulo}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-9">
                        <div id="inicio" class="col-8 mr-auto font-weight-bold">
                            <h2 class="text-justify my-5">{{$comic->titulo}}</h2>
                            <div class="row">
                                <div class="col-6 my-4">
                                    <h5>Guionista</h5>
                                    <p>{{$guionista->nombre}} {{$guionista->apellidos}}</p>
                                </div>
                                <div class="col-6 my-4">
                                    <h5>Dibujante</h5>
                                    <p>{{$dibujante->nombre}} {{$dibujante->apellidos}}</p>
                                </div>
                                <div class="col-6 mt-4 mb-5">
                                    <h5>Portadista</h5>
                                    @isset($portadista)
                                    <p>{{$portadista->nombre}} {{$portadista->apellidos}}</p>
                                    @endisset
                                </div>
                            </div>
                            <h6 class="text-justify col-8 my-4 p-0">{{($comic->descripcion)}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

