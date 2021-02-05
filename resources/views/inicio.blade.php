@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
               @if(Auth::user()->estado==0)
                <div class="alert alert-warning" role="alert">
                Su solicitud esta en Procesos porfavor espere a que sea verificada
                </div>
                @elseif(Auth::user()->estado==1)
                <div class="alert alert-success" role="alert">
                Su sulicitud fue aceptada con exito!!
                </div>
                @elseif(Auth::user()->estado==2)
                    <div class="alert alert-danger" role="alert">
                        Su solicitud fue denegada por falta de requisitos porfavor intente de nuevo creando otro formulario.
                        </div>
                @endif
    </div>
</div>
@endsection
