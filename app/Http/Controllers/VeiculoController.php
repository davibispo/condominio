<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use Illuminate\Foundation\Auth\User;
use App\Models\Unidade;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos   = Veiculo::all()->where('ativo', 1)->sortBy('user_id');
        $users      = User::all()->where('ativo', 1);
        $unidades   = Unidade::all()->where('ativo', 1);

        return view('veiculos.index', compact('veiculos', 'users', 'unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $veiculos = Veiculo::all()->where('ativo', 1)->where('user_id', auth()->user()->id);
        return view('veiculos.create', compact('veiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo();

        $veiculo->tipo = $request->tipo;
        $veiculo->descricao = $request->descricao;
        $veiculo->cor = $request->cor;
        $veiculo->placa = strtoupper($request->placa);
        $veiculo->user_id = auth()->user()->id;

        $veiculo->save();

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
        $veiculo = Veiculo::find($id);
        return view('veiculos.update', compact('veiculo'));
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
        $veiculo = Veiculo::find($id);

        $veiculo->tipo = $request->tipo;
        $veiculo->descricao = $request->descricao;
        $veiculo->cor = $request->cor;
        $veiculo->placa = strtoupper($request->placa);

        $veiculo->update();

        return redirect()->route('veiculos.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);

        $veiculo->delete();

        return redirect()->back();
    }
}
