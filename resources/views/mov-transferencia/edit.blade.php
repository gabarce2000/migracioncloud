@extends('layouts.app')

@section('template_title')
    Update Mov Transferencia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Mov Transferencia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('mov-transferencia.update', $movTransferencia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('mov-transferencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
