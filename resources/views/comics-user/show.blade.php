@extends('layouts.app3')

@section('template_title')
    Mostrar Comics User' }}
@endsection

@section('content')
    <section class="container-fluid admnistracion">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Comics User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comics-users.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Comic Id:</strong>
                            {{ $comicsUser->comic_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $comicsUser->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
