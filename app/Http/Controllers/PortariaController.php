<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use App\User;
use Illuminate\Http\Request;

class PortariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moradores = User::all()->where('ativo', 1)->sortBy('apto')->sortBy('bloco');
        $visitantes = Visitante::all()->sortByDesc('id');
        $dataAtual = date('Y-m-d');
        //dd($dataAtual);
        return view('portaria.create', compact('moradores', 'visitantes', 'dataAtual'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $visitante = new Visitante();

        $visitante->user_id = $request->user_id;
        $visitante->nome    = strtoupper($request->nome);
        $visitante->tipo    = $request->tipo;
        $visitante->qtde    = $request->qtde;
        $visitante->foto    = $request->foto;
        $visitante->placa   = strtoupper($request->placa);
        $visitante->cpf     = $request->cpf;
        $visitante->rg      = strtoupper($request->rg);

        $visitante->save();

        return redirect()->back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
