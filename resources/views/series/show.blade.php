@extends('layouts.app')

@section('template_title')
    {{ $series->titulo ?? 'Mostrar Serie' }}
@endsection

@section('content')
    <section class="container-fluid admnistracion">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Serie</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('series.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Serie Id:</strong>
                            {{ $series->serie_id }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $series->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $series->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $series->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Mime:</strong>
                            {{ $series->mime }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
