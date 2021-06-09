@extends('layouts.app')

@section('template_title')
    Comics Character
@endsection

@section('content')
    <div class="container-fluid admnistracion">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comics Character') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comics-characters.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
										<th>Personaje Id</th>
										<th>Personaje</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comicsCharacters as $comicsCharacter)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $comicsCharacter->comic_id }}</td>
                                            <td>{{ $comicsCharacter->comic->titulo }}</td>
											<td>{{ $comicsCharacter->personaje_id }}</td>
											<td>{{ $comicsCharacter->character->nombre }}</td>

                                            <td>
                                                <form action="{{ route('comics-characters.borra',['id' => $comicsCharacter->comic_id, 'characterid' => $comicsCharacter->personaje_id]) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('comics-characters.show',$comicsCharacter->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comics-characters.edit',$comicsCharacter->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a> --}}
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
                <div class="mx-auto" style="width: 20%"> {!! $comicsCharacters->links() !!} </div>
            </div>
        </div>
    </div>
@endsection
