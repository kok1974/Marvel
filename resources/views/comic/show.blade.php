@extends('layouts.app3')

@section('template_title')
   Mostrar Comic
@endsection

@section('content')
    <section class="container-fluid admnistracion">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Comic</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comics.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Comic Id:</strong>
                            {{ $comic->comic_id }}
                        </div>
                        <div class="form-group">
                            <strong>Serie Id:</strong>
                            {{ $comic->serie_id }}
                        </div>
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $comic->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Número:</strong>
                            {{ $comic->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $comic->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Formato:</strong>
                            {{ $comic->formato }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $comic->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Extensión:</strong>
                            {{ $comic->mime }}
                        </div>
                        <div class="form-group">
                            <strong>Guionista Id:</strong>
                            {{ $comic->guionista_id }}
                        </div>
                        <div class="form-group">
                            <strong>Dibujante Id:</strong>
                            {{ $comic->dibujante_id }}
                        </div>
                        <div class="form-group">
                            <strong>Portadista Id:</strong>
                            {{ $comic->artistaPortada_id }}
                        </div>
                        <div class="form-group">
                            <strong>Variantes portada:</strong>
                            {{ $comic->variantesPortada }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
