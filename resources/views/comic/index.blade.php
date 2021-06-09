@extends('layouts.app')

@section('template_title')
    Comics
@endsection

@section('content')
    <div class="container-fluid admnistracion">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comics') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comics.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>#</th>

										<th>Comic</th>
										<th>Serie</th>
										<th>Título</th>
										<th>Nº</th>
										<th>Descripción</th>
										<th>Formato</th>
										<th>Imagen</th>
										<th>Ext</th>
										<th>Guionista</th>
										<th>Dibujante</th>
										<th>Portadista</th>
										<th>Variantes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comics as $comic)
                                        <tr class="text-center">
                                            <td>{{ ++$i }}</td>

											<td>{{ $comic->comic_id }}</td>
											<td>{{ $comic->serie_id }}</td>
											<td class="text-justify">{{ $comic->titulo }}</td>
											<td>{{ $comic->numero }}</td>
											<td class="text-justify">{{ $comic->descripcion }}</td>
											<td>{{ $comic->formato }}</td>
											<td class="text-justify">{{ $comic->imagen }}</td>
											<td>{{ $comic->mime }}</td>
											<td>{{ $comic->guionista_id }}</td>
											<td>{{ $comic->dibujante_id }}</td>
											<td>{{ $comic->artistaPortada_id }}</td>
											<td>{{ $comic->variantesPortada }}</td>

                                            <td>
                                                <form action="{{ route('comics.destroy',$comic->comic_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('comics.show',$comic->comic_id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comics.edit',$comic->comic_id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                <div class="mx-auto" style="width: 20%"> {!! $comics->links() !!} </div>
            </div>
        </div>
    </div>
@endsection
