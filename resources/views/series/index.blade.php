@extends('layouts.app')

@section('template_title')
    Series
@endsection

@section('content')
    <div class="container-fluid admnistracion">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Series') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('series.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    <tr class="text-center">
                                        <th>No</th>
										<th>Id</th>
										<th>Titulo</th>
										<th>Descripcion</th>
										<th>Imagen</th>
										<th>Mime</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($series as $serie)
                                        <tr class="text-justify">
                                            <td>{{ ++$i }}</td>
											<td >{{ $serie->serie_id }}</td>
											<td>{{ $serie->titulo }}</td>
											<td >{{ $serie->descripcion }}</td>
											<td >{{ $serie->imagen }}</td>
											<td >{{ $serie->mime }}</td>
                                            <td >
                                                <div class="btn-group-vertical btn-group-sm" role="group" aria-label="agrupando">
                                                <form action="{{ route('series.destroy',$serie->serie_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('series.show',$serie->serie_id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('series.edit',$serie->serie_id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                <div class="mx-auto" style="width: 20%"> {!! $series->links() !!} </div>
            </div>
        </div>
    </div>
@endsection
