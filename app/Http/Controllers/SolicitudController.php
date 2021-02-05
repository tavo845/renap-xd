<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formulario;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }
    public function user()
    {
        //donde los usuarios meten sus datos
        return view('usuarios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campo = formulario::all();
        $user = User::all();
        return view('solicitudes',compact('campo','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $campo =  new formulario();
        $campo->name = $request->name;
        $campo->apellido = $request->apellido;
        $campo->fecha = $request->fecha;
        $campo->email = $request->email;
        $campo->departamento = $request->departamento;
        $campo->municipio = $request->municipio;
        $campo->foto = $request->foto;
        $campo->numero = $request->numero;
        if($request->hasfile('foto')){
            $campo['foto']=$request->file('foto')->store('uploads','public');
        }

        $password = "";
        $password = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"),rand(0,61),8);

        $campo  =   formulario::create([
            'name'=>$campo['name'],
            'apellido'=>$campo['apellido'],
            'fecha'=>$campo['fecha'],
            'email'=>$campo['email'],
            'departamento'=>$campo['departamento'],
            'municipio'=>$campo['municipio'],
            'foto'=>$campo['foto'],
            'numero'=>$campo['numero'],
            'password'=>$password,

        ]);

        $campo = new User();
        $campo->name = $request->name;
        $campo->email = $request->email;
        $passcrypt = Hash::make($password);
        $fullacces = 'no';
        $estado=0;

        $campo = User::create([
            'name'=>$campo['name'],
            'email'=>$campo['email'],
            'password'=>$passcrypt,
            'fullacces' =>$fullacces,
            'estado'=>$estado,
        ]);
        return redirect()->route('usuarios',compact('campo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $user = User::find($id);
        return view('edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->get('password');
        $user->fullacces = $request->fullacces;
        $estado = 0;
        $type = $request['type'];
        switch ($type) {
            case 0:
                $estado = 0;
                break;
            case 1:
                $estado = 1;
                break;
            case 2:
                $estado = 2;
                break;
        }
        $user->estado = $estado;
        $user->save();
        return $this->create();

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
