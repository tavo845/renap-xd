<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formulario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('SoloAdmin',['only','index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        return view('home');
    }
    public function user()
    {
      
        return view('inicio');
    }
    
    //tabla donde se muestra su solicitud silicitudes.blade*
   
       
}
