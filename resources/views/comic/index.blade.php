@extends('layouts.app')

@section('template_title')
    Comic
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comic') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comics.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    <tr>
                                        <th>No</th>
                                        
										<th>Comic Id</th>
										<th>Serie Id</th>
										<th>Titulo</th>
										<th>Numero</th>
										<th>Descripcion</th>
										<th>Formato</th>
										<th>Imagen</th>
										<th>Mime</th>
										<th>Guionista Id</th>
										<th>Dibujante Id</th>
										<th>Artistaportada Id</th>
										<th>Variantesportada</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comics as $comic)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $comic->comic_id }}</td>
											<td>{{ $comic->serie_id }}</td>
											<td>{{ $comic->titulo }}</td>
											<td>{{ $comic->numero }}</td>
											<td>{{ $comic->descripcion }}</td>
											<td>{{ $comic->formato }}</td>
											<td>{{ $comic->imagen }}</td>
											<td>{{ $comic->mime }}</td>
											<td>{{ $comic->guionista_id }}</td>
											<td>{{ $comic->dibujante_id }}</td>
											<td>{{ $comic->artistaPortada_id }}</td>
											<td>{{ $comic->variantesPortada }}</td>

                                            <td>
                                                <form action="{{ route('comics.destroy',$comic->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('comics.show',$comic->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comics.edit',$comic->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $comics->links() !!}
            </div>
        </div>
    </div>
@endsection
