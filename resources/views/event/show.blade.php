@extends('layouts.app')

@section('template_title')
    {{ $event->name ?? 'Show Event' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Event</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Event Id:</strong>
                            {{ $event->event_id }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $event->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $event->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Inicio:</strong>
                            {{ $event->inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fin:</strong>
                            {{ $event->fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
