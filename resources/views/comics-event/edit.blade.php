@extends('layouts.app')

@section('template_title')
    Editar Comics Event
@endsection

@section('content')
    <section class="content container-fluid admnistracion">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Comics Event</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comics-events.update', $comicsEvent->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('comics-event.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
