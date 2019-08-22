<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Unidade;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use App\User;

class MoradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $unidades = Unidade::all();
        return view('moradores.index', compact('users', 'unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $morador = User::find($id);
        $veiculos = Veiculo::all();
        $pets = Pet::all();

        return view('moradores.show', compact('morador', 'veiculos', 'pets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        if($user->ativo == 0){
            $user->ativo = 1; //ativar cadastro
        }else{
            $user->ativo = 0; //desativar cadastro
        }

        $user->update();

        return redirect()->back();
    }

    public function atualizaMorador($id)
    {
        $user = User::find($id);
        return view('moradores.update', compact('user'));
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
