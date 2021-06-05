@extends('layouts.app')

@section('template_title')
    {{ $comicsCharacter->name ?? 'Show Comics Character' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Comics Character</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comics-characters.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Comic Id:</strong>
                            {{ $comicsCharacter->comic_id }}
                        </div>
                        <div class="form-group">
                            <strong>Personaje Id:</strong>
                            {{ $comicsCharacter->personaje_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
