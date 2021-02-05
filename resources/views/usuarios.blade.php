@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-success">{{ __('Formulario') }}</div>

                <div class="card-body">
                    <form method="post" action="{{route('usuarios.store')}}" enctype="multipart/form-data">
                            @csrf
                        <label for="name">Nombre</label>
                        <input type="name" class="form-control" id="name" name="name" required placeholder="Ingrese su Nombre" >
                        <br>
                        <label for="apellido">Apellido</label>
                        <input type="apellido" class="form-control" id="apellido" name="apellido" required placeholder="Ingrese su Apellido">
                        <br>
                        <label for="floatingInputValue">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required placeholder="Ingrese su Fecha de Nacimiento" max="2003-12-31" min="1990-01-01">
                        <br>
                        <label for="floatingInputValue">Correo Electronico</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="ref= correo@gmail.com">
                        <br>
                        <label for="floatingInputValue">Departamento de origen</label>
                        <input type="departamento" class="form-control" id="departamento" name="departamento" required placeholder="Ingrese su Departamento de origen">
                        <br>
                        <label for="floatingInputValue">Municipio de origen</label>
                        <input type="municipio" class="form-control" id="municipio" name="municipio" required placeholder="Ingrese su municipio de origen">
                        <br>
                        <label for="floatingInputValue">foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" required placeholder="foto" onchange="return validarExt()">
                        <br>
                        <label for="floatingInputValue">Numero de Telefono</label>
                        <input type="text" class="form-control" id="numero" name="numero" required placeholder="Ingrese su Numero de telefono" pattern="[0-9]+" maxlength="8" minlength="0">
                        <br>
                        <div class="form-group row mb-47">
                        <button type="submit" class="btn btn-success">Crear una solicitud
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
@endsection}

<script type="text/javascript">
    function validarExt()
    {
        var foto = document.getElementById('foto');
        var fotoRuta = foto.value;
        var extPermitidas = /(.jpg)$/i;
        if(!extPermitidas.exec(fotoRuta))
        {
            window.alert('Porfavor ingrese lo que se le esta soicitando.');
            foto.value ='foto';
            return false;
        }
        else
        {
            if(foto.files && foto.files[0])
            {
                var visor = new FileReader();
                visor.onload=function(e)
                {
                    document.getElementById('visorfoto').innerHTML=
                    '<embed src="'+e.target.result+'"width ="100" height="100">';
                };
                visor.readAsDataURL(foto.files[0]);
            }
        }
    }
</script>
