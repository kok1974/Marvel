@extends('layouts.app')

@section('template_title')
    {{ $comicsUser->name ?? 'Show Comics User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Comics User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comics-users.index') }}"> Back</a>
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
