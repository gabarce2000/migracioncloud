@extends('layouts.base')


@section('template_title')
    Mov Transferencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Movimientos de Transferencia Detallado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mov-transferencia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Transferencia') }}
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
                                        
										<th>Concepto</th>
										<th>Generado por</th>
										<th>Tipo Transaccion</th>
										<th>Monto</th>
										<th>Para</th>
										<th>Fecha Transaccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movTransferencias  as $i=>$movTransferencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $movTransferencia->concepto }}</td>
											<td>{{ $movTransferencia->userR->numero_cuenta.' '.$movTransferencia->userR->name  }}</td>
											<td>{{ $movTransferencia->tipo_transaccion }}</td>
											<td>{{ $movTransferencia->monto }}</td>
											<td>{{ $movTransferencia->userD->numero_cuenta.' '.$movTransferencia->userD->name }}</td>
											<td>{{ $movTransferencia->fecha_transaccion }}</td>

                                            <td>
                                                <form action="{{ route('mov-transferencia.destroy',$movTransferencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mov-transferencia.show',$movTransferencia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <!-- <a class="btn btn-sm btn-success" href="{{ route('mov-transferencia.edit',$movTransferencia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> -->
                                                    @csrf
                                                    <!-- @method('DELETE') -->
                                                    <!-- <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button> -->
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection
