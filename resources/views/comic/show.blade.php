@extends('layouts.app3')

@section('template_title')
    {{ $comic->name ?? 'Show Comic' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Comic</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comics.index') }}"> Back</a>
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
                            <strong>Titulo:</strong>
                            {{ $comic->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $comic->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
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
                            <strong>Mime:</strong>
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
                            <strong>Artistaportada Id:</strong>
                            {{ $comic->artistaPortada_id }}
                        </div>
                        <div class="form-group">
                            <strong>Variantesportada:</strong>
                            {{ $comic->variantesPortada }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
