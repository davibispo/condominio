<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arquivo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ArquivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arquivos = Arquivo::all();
        $i = 1;
        return view('files.index', compact('arquivos', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arquivos = Arquivo::all();
        $i = 1;
        return view('files.create', compact('arquivos', 'i'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arquivo = new Arquivo();

        $arquivo->descricao = $request->descricao;

        // Define o valor default para a variável que contém o nome da imagem --- ARQUIVO ----
        $nameFile = null;

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('YmdHis'));

            // Recupera a extensão do arquivo
            $extension = $request->arquivo->extension();

            // Define finalmente o nome
            $nameFile = "file{$name}.{$extension}";

            // Faz o upload:
            $arquivo->arquivo = $request->arquivo->storeAs('files', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$arquivo->arquivo )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();
        }


        $arquivo->save();

        return redirect()->route('files.index')->with('alertSuccess', 'Arquivo enviado com sucesso!');
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
        $arquivo = Arquivo::find($id);

        //deleta o arquivo também.
        Storage::delete("{$arquivo->arquivo}");
        
        $arquivo->delete();

        return redirect()->back()->with('alertDanger', 'Arquivo excluído com sucesso!');
    }
}
