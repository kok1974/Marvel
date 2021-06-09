@extends('layouts.app')

@section('template_title')
    Editar Comic
@endsection

@section('content')
    <section class="container-fluid admnistracion">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Comic</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comics.update', $comic->comic_id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('comic.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
