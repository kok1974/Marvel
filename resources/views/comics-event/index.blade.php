@extends('layouts.app')

@section('template_title')
    Comics Event
@endsection

@section('content')
    <div class="container-fluid admnistracion">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comics Event') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comics-events.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Titulo</th>
										<th>Event Id</th>
										<th>Evento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comicsEvents as $comicsEvent)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $comicsEvent->comic_id }}</td>
                                            <td>{{ $comicsEvent->comic->titulo }}</td>
											<td>{{ $comicsEvent->event_id }}</td>
											<td>{{ $comicsEvent->event->titulo }}</td>

                                            <td>
                                                <form action="{{ route('comics-events.borra',['id' => $comicsEvent->comic_id, 'eventid' => $comicsEvent->event_id]) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('comics-events.show',$comicsEvent->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comics-events.edit',$comicsEvent->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a> --}}
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
                <div class="mx-auto" style="width: 20%"> {!! $comicsEvents->links() !!} </div>
            </div>
        </div>
    </div>
@endsection
