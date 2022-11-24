<?php

namespace App\Http\Controllers;

use App\Models\MovTransferencia;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class MovTransferenciaController
 * @package App\Http\Controllers
 */
class MovTransferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movTransferencias = MovTransferencia::all();


        $cuentas = User::pluck('numero_cuenta','id');
        $name = User::pluck('name', 'id');
        foreach ($cuentas as $key => $value) {
            $cuentas[$key] =  ($cuentas[$key].' '.$name[$key]);
            if($value == auth()->user()->numero_cuenta){
                unset($cuentas[$key]);
            }
        }
        return view('mov-transferencia.index', compact('movTransferencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuentas = User::pluck('numero_cuenta','id');
        $name = User::pluck('name', 'id');
        foreach ($cuentas as $key => $value) {
            $cuentas[$key] =  ($cuentas[$key].' '.$name[$key]);
            if($value == auth()->user()->numero_cuenta){
                unset($cuentas[$key]);
            }
        }
        $fecha = now();
        $movTransferencia = new MovTransferencia();
        return view('mov-transferencia.create', compact('movTransferencia','cuentas', 'fecha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MovTransferencia::$rules);
        // dd($request);
        $movTransferencia = MovTransferencia::create($request->all());
        
        $destinatario = User::all()->where('id',$movTransferencia->user_destino_id)->first();
        $representante = User::all()->where('id',$movTransferencia->user_representante_id)->first();
        $destinatario->saldo = $destinatario->saldo + $movTransferencia->monto;
        $representante->saldo = $representante->saldo - $movTransferencia->monto;
        $representante->save();
        $destinatario->save();

        return redirect()->route('mov-transferencia.index')
            ->with('success', 'MovTransferencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movTransferencia = MovTransferencia::find($id);

        return view('mov-transferencia.show', compact('movTransferencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movTransferencia = MovTransferencia::find($id);

        return view('mov-transferencia.edit', compact('movTransferencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MovTransferencia $movTransferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MovTransferencia $movTransferencia)
    {
        request()->validate(MovTransferencia::$rules);

        $movTransferencia->update($request->all());

        return redirect()->route('mov-transferencias.index')
            ->with('success', 'MovTransferencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $movTransferencia = MovTransferencia::find($id)->delete();

        return redirect()->route('mov-transferencias.index')
            ->with('success', 'MovTransferencia deleted successfully');
    }
}
