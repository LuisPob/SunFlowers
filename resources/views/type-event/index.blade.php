
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('template_title')
Tipo Evento
@endsection

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tipo Evento'])
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Evento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('type-events.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($typeEvents as $typeEvent)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $typeEvent->nombre }}</td>

                                            <td>
                                                <form action="{{ route('type-events.destroy',$typeEvent->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('type-events.show',$typeEvent->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('type-events.edit',$typeEvent->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $typeEvents->links() !!}
            </div>
        </div>
    </div>
@endsection
