@extends('layouts.app4')

@section('template_title')
    Editar Comics Character
@endsection

@section('content')
    <section class="container-fluid admnistracion">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Comics Character</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comics-characters.update', $comicsCharacter->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('comics-character.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
