<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

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
        return view('pets.create', compact('pets'));
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
        $pet->nome = $request->nome;
        $pet->obs = $request->obs;
        $pet->user_id = auth()->user()->id;

        $pet->vacina = $request->vacina->store('pets');

        // Se informou o arquivo, retorna um boolean
        $pet->vacina = $request->hasFile('vacina');

        // Se é válido, retorna um boolean
        $pet->vacina = $request->file('vacina')->isValid();


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
        $pet->nome = $request->nome;
        $pet->obs = $request->obs;
        $pet->vacina = $request->vacina;

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
        $pet->delete();

        return redirect()->back();
    }
}
