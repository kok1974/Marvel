@extends('layouts.app')

@section('template_title')
    Eventos
@endsection

@section('content')
    <div class="container-fluid admnistracion">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Eventos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Inicio</th>
										<th>Fin</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr class="text-justify">
                                            <td>{{ ++$i }}</td>
											<td>{{ $event->event_id }}</td>
											<td>{{ $event->titulo }}</td>
											<td>{{ $event->descripcion }}</td>
                                            <td>{{ $event->imagen }}</td>
											<td>{{ $event->inicio }}</td>
											<td>{{ $event->fin }}</td>
                                            <td>
                                                <div class="btn-group-vertical btn-group-sm" role="group" aria-label="agrupando">
                                                <form action="{{ route('events.destroy',$event->event_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('events.show',$event->event_id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('events.edit',$event->event_id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                <div class="mx-auto" style="width: 20%"> {!! $events->links() !!} </div>
            </div>
        </div>
    </div>
@endsection
