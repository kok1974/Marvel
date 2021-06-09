@extends('layouts.app')

@section('template_title')
    Comics User
@endsection

@section('content')
    <div class="container-fluid admnistracion">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comics User') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comics-users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Comic Id</th>
                                        <th>Comic</th>
										<th>Usuario</th>
										<th>Usuario Id</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comicsUsers as $comicsUser)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $comicsUser->comic_id }}</td>
                                            <td>{{ $comicsUser->comic->titulo }}</td>
											<td>{{ $comicsUser->user_id }}</td>
                                            <td>{{ $comicsUser->user->name }}</td>

                                            <td>
                                                <form action="{{ route('comics-users.borra',['id' => $comicsUser->comic_id, 'userid' => $comicsUser->user_id]) }}" method="POST">
                                                {{-- <a class="btn btn-sm btn-primary " href="{{ route('comics-users.show',$comicsUser) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comics-users.edit',$comicsUser) }}"><i class="fa fa-fw fa-edit"></i> Editar</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mx-auto" style="width: 20%"> {!! $comicsUsers->links() !!} </div>
            </div>
        </div>
    </div>
@endsection
