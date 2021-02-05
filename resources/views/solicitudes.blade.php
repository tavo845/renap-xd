@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-14">
          <div class="card">
              <div class="card-header text-center bg-success">{{ __('Formulario') }}</div>

              <div class="card-body">
<table class="table">
    <thead>
      <tr>

        <th scope="col">nombre</th>
        <th scope="col">apellido</th>
        <th scope="col">fecha</th>
        <th scope="col">email</th>
        <th scope="col">departamento</th>
        <th scope="col">municipio</th>
        <th scope="col">foto</th>
        <th scope="col">numero</th>
      </tr>
    </thead>
    <tbody>
          @foreach ($campo as $item)
          <tr>

          <td>{{$item->name}}</td>
          <td>{{$item->apellido}}</td>
          <td>{{$item->fecha}}</td>
          <th>{{$item->email}}</th>
          <td>{{$item->departamento}}</td>
          <td>{{$item->municipio}}</td>
          <td>
            <img src={{asset('storage').'/'.$item->foto}} alt="" width="150">
          </td>
          <td>{{$item->numero}}</td>

          </td>

        </tr>
          @endforeach

    </tbody>

  </div>
  </table>
        </div>
        <br><br><br>
        <table class="table">
    <thead>
      <tr>

        <th scope="col">nombre</th>
        <th scope="col">email</th>
        <th scope="col">contraseña</th>
        <th scope="col">estado</th>
        <th scope="col">Opcion</th>
      </tr>
    </thead>
    <tbody>
          @foreach ($user as $item)
          <tr>

          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->password}}</td>
          <td>{{$item->estado}}</td>
          <td>
              <a href="{{ route ('edit',$item->id)}}" class="btn btn-primary"> Ver Opciones</a>

          </td>

        </tr>
          @endforeach

    </tbody>

  </div>
  </table>
        <div class="row-justify-content-center">
        <a class="btn btn-primary col-md-5" href="home">Regresar</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
