<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_transaccion') }}
            <div class="form-control">{{$fecha}}</div>
            
            {{ Form::hidden('fecha_transaccion', $fecha,$movTransferencia->fecha_transaccion, ['class' => 'form-control','disabled' . ($errors->has('fecha_transaccion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha ']) }}
            {!! $errors->first('fecha_transaccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            {{ Form::label('tipo_transaccion') }}
            <div class="form-control">Directa</div>
            {{ Form::hidden('tipo_transaccion', 'Directa',$movTransferencia->tipo_transaccion, ['class' => 'form-control','disabled' . ($errors->has('tipo_transaccion') ? ' is-invalid' : ''), 'placeholder' => 'Directa']) }}
            {!! $errors->first('tipo_transaccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::number('monto',$movTransferencia->monto, ['max'=>auth()->user()->saldo ,'class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Desde Numero Cuenta') }}
            <div class="form-control">{{auth()->user()->numero_cuenta .' '.auth()->user()->name}}</div>
            {{ Form::hidden('user_representante_id', auth()->user()->id, $movTransferencia->user_representante_id, ['class' => 'form-control','disabled' . ($errors->has('user_representante_id') ? ' is-invalid' : ''), 'placeholder' => auth()->user()->numero_cuenta]) }}
            {!! $errors->first('user_representante_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Para') }}
            {{ Form::select('user_destino_id', $cuentas,$movTransferencia->user_destino_id, ['class' => 'form-control' . ($errors->has('user_destino_id') ? ' is-invalid' : ''), 'placeholder' => 'Elija cuenta']) }}
            {!! $errors->first('user_destino_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concepto', $movTransferencia->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Transferir</button>
        <a class="btn btn-danger"  href="{{route('home')}}">
            Cancelar
        </a>
    </div>
</div>