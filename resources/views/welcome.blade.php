@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-center">{{ __('Pasos para Tramitar dpi') }}</div>

                <div class="card-body">
                    <div class=" text-center">{{ __('Pasos para Tramitar dpi') }}</div>
                    <br>
                    <a type="button" class="btn btn-dark">Cuando Se Puede Sacar?</a>
                    <br>
                    <div class="card-body">
                        <div class=" text">{{ __('1.Primer DPI')}}</div>
                        <div class=" text">{{ __('2.Solicitud anticipada para menores de edad que hayan cumplido diecisiete (17) años de edad, en cuyo caso les será entregado a partir del día que cumplan dieciocho (18) años de edad. ')}}</div>
                        <div class=" text">{{ __('3.Renovación por Vencimiento. ')}}</div>
                        <div class=" text">{{ __('4.Reposición por robo, extravío, destrucción o deterioro.')}}</div>
                        <div class=" text">{{ __('5.Reposición por modificación de cualquier dato impreso en el documento, grabado en el chip o que la persona hubiera sufrido algún cambio en su biometría..')}}</div>
                </div>
                <br>
                <a type="button" class="btn btn-dark btn-center">REQUISITOS</a>
                <div class=" text">{{ __('1.Recibo de pago correspondiente al tipo de solicitud.')}}</div>
                <div class=" text">{{ __('2.Original y fotocopia vigente de la certificación de la inscripción registral, según corresponda.')}}</div>
                <div class=" text">{{ __('3.Presentación de Boleto de Ornato, exceptuando los casos que establezca la ley..')}}</div>
                <div class="form-group row mb-47">
                    <a type="submit" class="btn btn-success" href="{{route('usuarios')}}">Crear una solicitud
                    </a>
               
                

            </div>
        </div>
    </div>
</div>
@endsection