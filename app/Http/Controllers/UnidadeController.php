<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidade;
use App\User;
use Illuminate\Support\Facades\DB;

class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades   = Unidade::all()->where('ativo', '1');
        $users      = User::all()->where('ativo', '1');
        return view('unidades.index', compact('unidades', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidade::all()->where('ativo', '1')->sortByDesc('id');
        return view('unidades.create', compact('unidades'));
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
        $unidade = new Unidade();

        $unidade->bloco = $request->bloco;
        $unidade->unidade = $request->unidade;

        $unidade->save();

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
    {   $unidade = Unidade::find($id);
        return view('unidades.update', compact('unidade'));
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
        $unidade = Unidade::find($id);

        $unidade->bloco = $request->bloco;
        $unidade->unidade = $request->unidade;

        $unidade->update();

        return redirect()->route('unidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unidade = Unidade::find($id);
        $unidade->delete();

        return redirect()->back();
    }



    /**
     * Cadastro de apartamento por morador
     */
    public function cadastro(Request $request)
    {
        //dd($request);
        $unidades   = Unidade::all();
        $users      = User::all()->where('ativo', '1');
        return view('unidades.cadastro', compact('unidades', 'users'));
    }

    public function storeCadastro(Request $request)
    {
        //dd($request);
        $unidade = DB::table('unidades')->select('id')->where('id', $request->id)->value('id');

        if($unidade = $request->id){

            DB::update("update unidades set user_id = '$request->user_id' where id = '$request->id'");

            return redirect()->back();
        }
    }

    public function editCadastro($id)
    {
        $unidade = Unidade::find($id);

        $unidades = Unidade::all();
        $users = User::all();

        return view('unidades.edit-cadastro', compact('unidade', 'unidades', 'users'));
    }

    public function updateCadastro(Request $request, $id)
    {
        $unidade = Unidade::find($id);

        $unidade->user_id = $request->user_id;

        $unidade->update();

        return redirect()->route('unidades.cadastro');
    }
}
