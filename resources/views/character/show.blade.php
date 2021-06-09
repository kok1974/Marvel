@extends('layouts.app')

@section('template_title')
    Mostrar Personaje
@endsection

@section('content')
    <section class="container-fluid admnistracion">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Personaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('characters.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Personaje Id:</strong>
                            {{ $character->personaje_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $character->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $character->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $character->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Mime:</strong>
                            {{ $character->mime }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
