@extends('layouts.app4')

@section('template_title')
    Editar Serie
@endsection

@section('content')
    <section class="ontainer-fluid admnistracion">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Serie</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('series.update', $series->serie_id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('series.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
