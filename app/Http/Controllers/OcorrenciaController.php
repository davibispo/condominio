<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocorrencia;
use App\User;

class OcorrenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ocorrencias = Ocorrencia::all()->sortByDesc('data');
        $users = User::all();
        return view('ocorrencias.index', compact('ocorrencias', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ocorrencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ocorrencia = new Ocorrencia();

        $ocorrencia->user_id = auth()->user()->id;
        $ocorrencia->data = $request->data;
        $ocorrencia->foto1 = $request->foto1;
        $ocorrencia->foto2 = $request->foto2;
        $ocorrencia->foto3 = $request->foto3;
        $ocorrencia->descricao = $request->descricao;
        $ocorrencia->anonimo = $request->anonimo;

        $ocorrencia->save();

        return redirect()->back()->with('alertSuccess', 'Obrigado! Ocorrência registrada com sucesso! As informações serão analisadas em breve.');
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
