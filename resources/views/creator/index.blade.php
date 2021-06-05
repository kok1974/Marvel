@extends('layouts.app')

@section('template_title')
    Creator
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Creator') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('creators.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Creator Id</th>
										<th>Nombre</th>
										<th>Apellidos</th>
										<th>Imagen</th>
										<th>Mime</th>
										<th>Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($creators as $creator)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $creator->creator_id }}</td>
											<td>{{ $creator->nombre }}</td>
											<td>{{ $creator->apellidos }}</td>
											<td>{{ $creator->imagen }}</td>
											<td>{{ $creator->mime }}</td>
											<td>{{ $creator->tipo }}</td>

                                            <td>
                                                <form action="{{ route('creators.destroy',$creator->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('creators.show',$creator->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('creators.edit',$creator->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $creators->links() !!}
            </div>
        </div>
    </div>
@endsection
