<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocavelArea;

class LocavelAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = LocavelArea::all()->where('ativo', 1);
        return view('locavel-areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = LocavelArea::all()->where('ativo', 1);
        return view('locavel-areas.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $area = new LocavelArea();

        $area->descricao = strtoupper($request->descricao);
        $area->valor = str_replace(',','.',$request->valor);
        $area->obs = $request->obs;

        $area->save();

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
        $area = LocavelArea::find($id);
        return view('locavel-areas.update', compact('area'));
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
        $area = LocavelArea::find($id);

        $area->descricao = strtoupper($request->descricao);
        $area->valor = str_replace(',','.',$request->valor);
        $area->obs = $request->obs;

        $area->update();

        return redirect()->route('locavel-areas.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = LocavelArea::find($id);
        $area->delete();

        return redirect()->back();
    }
}
