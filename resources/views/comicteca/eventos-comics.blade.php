@extends('layouts.app')

@section('content')

    <div class="cuerpo">
        <section>
            <div class="container mt-5 justify-content-center">
                <div id="inicio" class="pb-5">
                    <h2 class="text-center pb-1">Eventos</h2>
                    <p class="text-justify">En la <strong>Casa de las Ideas</strong> . Encuentra los comics que incluye.</p>
                </div>

                <div>
                    <div class="row d-block colorOficial">
                        @php
                            $letras = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
                        @endphp
                        <div class="row justify-content-around p-3">
                            @foreach ($letras as $letra)
                                <div  class="mr-1 mr-sm-0"><a class="link mitipo colorOficial" href="{{'#'.$letra}}">{{$letra}}</a></div>
                            @endforeach
                        </div>

                        <div class="row pt-5">
                            @foreach ($letras as $letra)
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mt-5">
                                            <H1 class="micolor" id="{{$letra}}">{{$letra}}</H1>
                                        </div>
                                        <div class="col-12 col-sm-6 my-5 ml-md-auto justify-content-end d-flex">
                                            <a class="colorOficial mr-5" href="#inicio">Inicio</a>
                                        </div>
                                    </div>
                                    <div class="row pl-5 ml-5">
                                        @foreach ($eventos as $evento)
                                            @if (str_starts_with($evento->titulo, $letra))
                                                <div class="col-12 col-md-6 pb-3">
                                                    <a class="colorOficial" href="{{ url('comiteca/evento/'.$evento->event_id ) }}">{{$evento->titulo}}</a>
                                                </div>
                                                @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

