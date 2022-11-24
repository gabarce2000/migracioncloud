<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function actualizarPerfil()
    {
        $usuarios = User::all()->where('id', auth()->user()->id);
        // dd($usuarios);
        return view('auth.perfil', compact('usuarios'));
    }

    public function guardarPerfil(Request $request)
    {
        $usuarios = User::all()->where('id', auth()->user()->id)->first()
            ->update(['name'=>$request['name'],
                    'cedula'=>$request['cedula'],
                    'email'=>$request['email'],
                    // 'telefono'=>$request['telefono'],
                    ]);

        // dd($usuarios);
        $usuarios = User::all()->where('id', auth()->user()->id);

        return view('auth.perfil', compact('usuarios'));
    }
}
