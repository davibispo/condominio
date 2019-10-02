<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::all()->where('status', 1);
        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pets = Pet::all()->where('status', 1)->where('user_id', auth()->user()->id);
        $i = 1;
        return view('pets.create', compact('pets', 'i'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pet = new Pet();

        $pet->tipo = $request->tipo;
        $pet->descricao = $request->descricao;
        $pet->nome = strtoupper($request->nome);
        $pet->obs = $request->obs;
        $pet->user_id = auth()->user()->id;

        // Define o valor default para a variável que contém o nome da imagem --- VACINA ----
        $nameFile = null;

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('vacina') && $request->file('vacina')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->vacina->extension();

            // Define finalmente o nome
            $nameFile = "pet{$name}.{$extension}";

            // Faz o upload:
            $pet->vacina = $request->vacina->storeAs('pets', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$pet->vacina )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();
        }

        // Verifica se informou o arquivo e se é válido --- FOTO ---
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->foto->extension();

            // Define finalmente o nome
            $nameFile = "pet{$name}.{$extension}";

            // Faz o upload:
            $pet->foto = $request->foto->storeAs('pets', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$pet->foto )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();
        }

        $pet->save();

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
        $pet = Pet::find($id);
        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet = Pet::find($id);
        return view('pets.update', compact('pet'));
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
        $pet = Pet::find($id);

        $pet->tipo = $request->tipo;
        $pet->descricao = $request->descricao;
        $pet->nome = strtoupper($request->nome);
        $pet->obs = $request->obs;
        $pet->user_id = auth()->user()->id;

        // Define o valor default para a variável que contém o nome da imagem
        $nameFile = null;

        if($request->vacina == null){ // Se vier nula
            $pet->vacina = $pet->vacina; //Não atualiza
        }else{
            // Verifica se informou o arquivo e se é válido
            if ($request->hasFile('vacina') && $request->file('vacina')->isValid()) {

                // Define um aleatório para o arquivo baseado no timestamps atual
                $name = uniqid(date('HisYmd'));

                // Recupera a extensão do arquivo
                $extension = $request->vacina->extension();

                // Define finalmente o nome
                $nameFile = "pet{$name}.{$extension}";

                // Faz o upload:
                $pet->vacina = $request->vacina->storeAs('pets', $nameFile);
                // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
                // Verifica se NÃO deu certo o upload (Redireciona de volta)
                if ( !$pet->vacina )
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload')
                            ->withInput();
            }
        }

        if($request->foto == null){ // Se vier nula
            $pet->foto = $pet->foto; //Não atualiza
        }else{
            // Verifica se informou o arquivo e se é válido --- FOTO ---
            if ($request->hasFile('foto') && $request->file('foto')->isValid()) {

                // Define um aleatório para o arquivo baseado no timestamps atual
                $name = uniqid(date('HisYmd'));

                // Recupera a extensão do arquivo
                $extension = $request->foto->extension();

                // Define finalmente o nome
                $nameFile = "pet{$name}.{$extension}";

                // Faz o upload:
                $pet->foto = $request->foto->storeAs('pets', $nameFile);
                // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
                // Verifica se NÃO deu certo o upload (Redireciona de volta)
                if ( !$pet->foto )
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload')
                            ->withInput();
            }
        }

        $pet->update();

        return redirect()->route('pets.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pet = Pet::find($id);

        //deleta o arquivo também.
        Storage::delete("{$pet->vacina}");
        
        $pet->delete();

        return redirect()->back();
    }
}
