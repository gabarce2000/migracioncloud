@extends('layouts.base')

@section('template_title')
    Create Mov Transferencia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">
                        
                        <h3>Nueva Transferencia Directa</h3>
                        </span>
                        <hr>
                    </div>
                    <div class="card-body">
                        <p>
                            <h5>Tu saldo es de: $ {{auth()->user()->saldo}}</h5>
                            <br>
                        </p>
                        <form method="POST" action="{{ route('mov-transferencia.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('mov-transferencia.form')

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
