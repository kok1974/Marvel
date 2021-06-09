@extends('layouts.app')

@section('template_title')
    Editar Evento
@endsection

@section('content')
    <section class="container-fluid admnistracion">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Evento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('events.update', $event->event_id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('event.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
