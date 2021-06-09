        @extends('layouts.app')

        @section('content')

            @include('partials.carrusel')

            <div class="cuerpo">
                <section>
                    <div class="container mt-5 justify-content-center">
                        <div class="text-center pb-5">
                            <h2>Novedades</h2>
                        </div>

                        <div class="row justify-content-center">
                            @foreach ($novedades as $comic)
                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-2">
                                <img class="img img-fluid" src="{{ $comic->imagen.'/portrait_uncanny.'.$comic->mime}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container mt-5 justify-content-center">
                        <div class="text-center pb-5">
                        <H2>Más buscados</H2>

                        <div class="row justify-content-center">
                                      {{--          @isset($busquedas)
                        // $busquedas is defined and is not null...

                    @endisset

                    @empty($busquedas)
                        // $busquedas is "empty"...
                    @endempty
                    @php
                        print_r ($busquedas)
                    @endphp --}}


     {{--@foreach ($comicsid as $id)
        {{$id}}
        @endforeach--}}
                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-2" style="height: 250px; width: 100%; background-color: green">

                            </div>

                        </div>
                    </div>
                </section>


                </div>
            </div>

        @endsection

