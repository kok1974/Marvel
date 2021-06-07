@extends('layouts.app3')

@section('template_title')
    Mostrar Artista
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Artista</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('creators.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Creator Id:</strong>
                            {{ $creator->creator_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $creator->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $creator->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $creator->tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
