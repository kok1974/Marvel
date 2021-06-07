@extends('layouts.app2')

@section('template_title')
Personaje
@endsection

@section('content')
    <div class="container-fluid admnistracion">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personaje') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('characters.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                    <tr class="text-center">
                                        <th>No</th>
										<th>Id</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Imagen</th>
										<th>Mime</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($characters as $character)
                                        <tr class="text-justify">
                                            <td>{{ ++$i }}</td>
											<td>{{ $character->personaje_id }}</td>
											<td>{{ $character->nombre }}</td>
											<td>{{ $character->descripcion }}</td>
											<td>{{ $character->imagen }}</td>
											<td>{{ $character->mime }}</td>
                                            <td>
                                                <div class="btn-group-vertical btn-group-sm" role="group" aria-label="agrupando">
                                                <form action="{{ route('characters.destroy',$character->personaje_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('characters.show',$character->personaje_id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('characters.edit',$character->personaje_id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mx-auto" style="width: 20%"> {!! $characters->links() !!} </div>
            </div>
        </div>
    </div>
@endsection
