        @extends('layouts.app')

        @section('content')

            <div class="cuerpo">
                <section>
                    <div class="container mt-5 justify-content-center">
                        <div class="text-center pb-5">
                            <h2>Novedades</h2>
                        </div>

                        <div class="row justify-content-center">
                        {{--    @foreach ($novedades as $comic)
                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-2">
                                  <img class="img img-fluid" src="{{ $comic->imagen.'/portrait_uncanny.'.$comic->mime}}">
                            </div>
                            @endforeach--}}
                        </div>
                    </div>
                </section>



                </div>
            </div>

        @endsection

