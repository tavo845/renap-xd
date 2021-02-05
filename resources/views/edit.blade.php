@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-success">{{ __('Formulario') }}</div>

                <div class="card-body">
                    <form method="post" action="{{route('edit.update',$user->id)}}">
                            @csrf

                        @method('put');
                        <label for="name">Nombre</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Ingrese su Nombre" value="{{ $user->name }}" readonly>
                        <br>
                        <br>
                        <label for="floatingInputValue">Correo Electronico</label>
                        <input type="email" class="form-control" id="email" name="email"    value="{{$user->email}}" readonly>
                        <br>
                        <label for="floatingInputValue">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}" readonly>
                        <br>
                        <label for="floatingInputValue">Campo
                        <select class="form-select" aria-label="Default select example" id="type" name="type">
                        <option selected>Selecciona la opcion</option>
                        <option value="1">aceptar</option>
                        <option value="2">rechazar</option>
                        </select></label>

                        <br>
                        <div class="form-group row mb-47">
                        <button type="submit" class="btn btn-success">Confirmar
                        </button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

