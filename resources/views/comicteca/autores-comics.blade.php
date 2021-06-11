@extends('layouts.app')

@section('content')

    <div class="cuerpo">
        <section>
            <div class="container mt-5 justify-content-center">
                <div id="inicio" class="pb-5">
                    <h2 class="text-center pb-1">Autores</h2>
                    <p class="text-justify">En la <strong>Casa de las Ideas</strong> siempre hubo, hay y habrá grandes autores: guionistas, dibujantes, entintadores, "coloristas", editores.
                            John Romita Jr., Stan Lee, Frank Miller y un largo etcétera.  Si buscas conocer más de sus obras aquí podrás encontrarla. Encuentra los comics en los que han participado.</p>
                </div>

                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Autores</a></li>
                        <li><a href="#tabs-2">Guionistas</a></li>
                        <li><a href="#tabs-3">Dibujantes</a></li>
                    </ul>

                    <div id="tabs-1" class="row">
                        @php
                            $letras = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
                        @endphp
                        <div class="row justify-content-around p-3">
                            @foreach ($letras as $letra)
                                <div  class="mr-1 mr-sm-0"><a class="link mitipo" href="{{'#'.$letra}}">{{$letra}}</a></div>
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
                                    @foreach ($autores as $autor)
                                        @if (str_starts_with($autor->nombre, $letra))
                                            <div class="col-12 col-md-6 pb-3">
                                                <a href="{{ url('comiteca/autor/'.$autor->creator_id ) }}">{{$autor->nombre.' '.$autor->apellidos}}</a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div id="tabs-2" class="justify-content-left">
                        @php
                        $letras = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
                        @endphp
                        <div id="inicio" class="row justify-content-around p-3">
                            @foreach ($letras as $letra)
                                <div  class="mr-1 mr-sm-0"><a class="link mitipo" href="{{'#'.$letra}}">{{$letra}}</a></div>
                            @endforeach
                        </div>

                        <div class="row pt-5">
                            @foreach ($letras as $letra)
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-6 mt-5">
                                        <H1 class="micolor" id="{{$letra}}">{{$letra}}</H1>
                                    </div>
                                    <div class="col-12 col-md-6 my-5 ml-md-auto justify-content-end d-flex">
                                        <a class="mr-5" href="#inicio">Inicio</a>
                                    </div>
                                </div>
                                <div class="row pl-5 ml-5">
                                    @foreach ($guionistas as $guionista)
                                        @if (str_starts_with($guionista->nombre, $letra))
                                            <div class="col-12 col-md-6 pb-3">
                                                <a href="{{ url('comiteca/autor/'.$guionista->creator_id ) }}">{{$guionista->nombre.' '.$guionista->apellidos}}</a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div id="tabs-3" class="justify-content-left">
                        @php
                        $letras = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
                        @endphp
                        <div id="inicio" class="row justify-content-around p-3">
                            @foreach ($letras as $letra)
                                <div  class="mr-1 mr-sm-0"><a class="link mitipo" href="{{'#'.$letra}}">{{$letra}}</a></div>
                            @endforeach
                        </div>

                        <div class="row pt-5">
                            @foreach ($letras as $letra)
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-6 mt-5">
                                        <H1 class="micolor" id="{{$letra}}">{{$letra}}</H1>
                                    </div>
                                    <div class="col-12 col-md-6 my-5 ml-md-auto justify-content-end d-flex">
                                        <a class="mr-5" href="#inicio">Inicio</a>
                                    </div>
                                </div>
                                <div class="row pl-5 ml-5">
                                    @foreach ($dibujantes as $dibujante)
                                        @if (str_starts_with($dibujante->nombre, $letra))
                                            <div class="col-12 col-md-6 pb-3">
                                                <a href="{{ url('comiteca/autor/'.$dibujante->creator_id ) }}">{{$dibujante->nombre.' '.$dibujante->apellidos}}</a>
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

