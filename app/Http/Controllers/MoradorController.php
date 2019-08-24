<?php

namespace App\Http\Controllers;

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
        $users = user::all();

        return view('moradores.show', compact('morador', 'veiculos', 'users'));
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
        //dd($request);
        $user = User::find($id);

        $user->tipo = $request->tipo;
        $user->bloco = $request->bloco;
        $user->apto = $request->apto;
        $user->name = strtoupper($request->name);
        $user->tel1 = $request->tel1;
        $user->tel2 = $request->tel2;
        $user->cpf = $request->cpf;
        $user->sexo = $request->sexo;
        $user->data_nascimento = $request->data_nascimento;
        $user->foto = $request->foto;
        $user->residente1 = strtoupper($request->residente1);
        $user->residente2 = strtoupper($request->residente2);
        $user->residente3 = strtoupper($request->residente3);
        $user->residente4 = strtoupper($request->residente4);
        $user->residente5 = strtoupper($request->residente5);
        $user->idade_residente1 = $request->idade_residente1;
        $user->idade_residente2 = $request->idade_residente2;
        $user->idade_residente3 = $request->idade_residente3;
        $user->idade_residente4 = $request->idade_residente4;
        $user->idade_residente5 = $request->idade_residente5;
        $user->email = $request->email;

        // Define o valor default para a variável que contém o nome da imagem
        $nameFile = null;

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->foto->extension();

            // Define finalmente o nome
            $nameFile = "user{$name}.{$extension}";

            // Faz o upload:
            $user->foto = $request->foto->storeAs('users', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$user->foto )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();
        }

        $user->update();

        return redirect()->route('home')->with('alertSuccess', 'Cadastro atualizado com sucesso!');

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
