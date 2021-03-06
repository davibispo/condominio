<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $totalMoradores = DB::table('users')->select('id')->where('ativo', 1)->count();
        $totalOcorrencias = DB::table('ocorrencias')->select('id')->count();
        $totalFiles = DB::table('arquivos')->select('id')->where('ativo', 2)->count();
        $totalLocais = DB::table('locavel_areas')->select('id')->count();
        $totalReservas = DB::table('reservas')->select('id')->count();
        $totalVeiculos = DB::table('veiculos')->select('id')->count();
        $totalPets = DB::table('pets')->select('id')->count();
        $totalUnidades = DB::table('users')->select('id')->where('tipo', 'Proprietário')->orWhere('tipo', 'Inquilino')->count();
        
        return view('adm.index', compact('totalMoradores','totalOcorrencias','totalFiles','totalLocais','totalReservas','totalVeiculos','totalPets','totalUnidades'));
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

    public function unidades()
    {
        $users = User::all()->where('ativo', 1)->where('reside', 1);
        return view('adm.unidades', compact('users'));
    }

    public function permissoes()
    {
        $users = User::all()->where('ativo', 1)->sortByDesc('updated_at');
        
        return view('adm.permissoes', compact('users'));
    }

    public function permissoesUpdate(Request $request)
    {        
        if($request->user_id > 0){
            DB::update("update users set status = $request->status where id = ?", [$request->user_id]);
            return redirect()->back()->with('alertSuccess', 'Permissão de acesso especial liberado com sucesso!');
        }else{
            return redirect()->back()->with('alertDanger', 'Erro! Precisa escolher algum usuário!');;
        }
    }
}
