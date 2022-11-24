@extends('layouts.base')

@section('template_title')
    {{ $movTransferencia->name ?? 'Show Mov Transferencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <hr>
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle de la transferencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mov-transferencia.index') }}"> Regresar</a>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $movTransferencia->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Transaccion:</strong>
                            {{ $movTransferencia->tipo_transaccion }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $movTransferencia->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Realizado por:</strong>
                            {{ $movTransferencia->userR->name  }}
                        </div>
                        <div class="form-group">
                            <strong>Para:</strong>
                            {{ $movTransferencia->userD->name }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Transaccion:</strong>
                            {{ $movTransferencia->fecha_transaccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
