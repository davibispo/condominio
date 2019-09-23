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
        //dd($request);
        $ocorrencia = new Ocorrencia();

        $ocorrencia->user_id = auth()->user()->id;
        $ocorrencia->data = $request->data;
        $ocorrencia->descricao = $request->descricao;
        $ocorrencia->anonimo = $request->anonimo;

        // Define o valor default para a variável que contém o nome da imagem --- foto ----
        $nameFile = null;
        //dd($request->foto1);

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('foto1') && $request->file('foto1')->isValid() || 
            $request->hasFile('foto2') && $request->file('foto2')->isValid() ||
            $request->hasFile('foto3') && $request->file('foto3')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name1 = uniqid(date('HisdmY'));
            $name2 = uniqid(date('HisYmd'));
            $name3 = uniqid(date('YmdHis'));

            // Recupera a extensão do arquivo
            $extension1 = $request->foto1->extension();
            $extension2 = $request->foto2->extension();
            $extension3 = $request->foto3->extension();

            // Define finalmente o nome
            $nameFile1 = "ocorrencia{$name1}.{$extension1}";
            $nameFile2 = "ocorrencia{$name2}.{$extension2}";
            $nameFile3 = "ocorrencia{$name3}.{$extension3}";

            // Faz o upload:
            $ocorrencia->foto1 = $request->foto1->storeAs('ocorrencias', $nameFile1);
            $ocorrencia->foto2 = $request->foto2->storeAs('ocorrencias', $nameFile2);
            $ocorrencia->foto3 = $request->foto3->storeAs('ocorrencias', $nameFile3);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$ocorrencia->foto1 || !$ocorrencia->foto2 || !$ocorrencia->foto3 )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();
        }

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
