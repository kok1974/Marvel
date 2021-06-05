@extends('layouts.app3')

@section('template_title')
    {{ $character->name ?? 'Show Character' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Character</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('characters.index') }}"> Back</a>
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
