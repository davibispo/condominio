<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocavelArea;
use App\Models\Reserva;
use App\User;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->where('ativo', 1);
        $reservas = Reserva::all()->where('status', 1);
        $areas = LocavelArea::all()->where('ativo', 1);
        return view('reservas.index', compact('reservas', 'users', 'areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservas = Reserva::all()->where('status', 1)->sortByDesc('id');
        $areas = LocavelArea::all()->where('ativo', 1);
        return view('reservas.create', compact('areas', 'reservas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva = new Reserva();

        $reserva->locavel_area_id = $request->locavel_area_id;
        $reserva->data_solicitada = $request->data_solicitada;
        $reserva->hora_inicio = $request->hora_inicio;
        $reserva->hora_fim = $request->hora_fim;
        $reserva->user_id = auth()->user()->id;
        $reserva->status = 1;

        if(auth()->user()->status == 1){
            return redirect()->back()->with('alertDanger', 'Desculpe, algo deu errado. Procure o Síndico ou Administradora para resolver.');
        }else{
            $reserva->save();
            return redirect()->back()->with('alertSuccess', 'Solicitação de reserva enviada com sucesso!');
        }
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
