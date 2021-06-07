@extends('layouts.app3')

@section('template_title')
    Mostrar Comics Event
@endsection

@section('content')
    <section class="container-fluid admnistracion">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Comics Event</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comics-events.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Comic Id:</strong>
                            {{ $comicsEvent->comic_id }}
                        </div>
                        <div class="form-group">
                            <strong>Event Id:</strong>
                            {{ $comicsEvent->event_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
