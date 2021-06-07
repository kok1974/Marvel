@extends('layouts.app3')

@section('template_title')
    Crear Comics User
@endsection

@section('content')
    <section class="container-fluid admnistracion">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Comics User</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comics-users.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('comics-user.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
