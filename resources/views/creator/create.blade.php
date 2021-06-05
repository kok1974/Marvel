@extends('layouts.app3')

@section('template_title')
    Create Creator
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Creator</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('creators.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('creator.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
