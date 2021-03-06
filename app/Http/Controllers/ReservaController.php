<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocavelArea;
use App\Models\Reserva;
use App\User;
use Illuminate\Support\Facades\DB;

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
        $reservas = Reserva::all()->sortByDesc('data_solicitada');
        $areas = LocavelArea::all()->where('ativo', 1);

        $dataAtual = date('Y-m-d');
        return view('reservas.index', compact('reservas', 'users', 'areas', 'dataAtual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservas = Reserva::all()->sortByDesc('data_solicitada')->where('status', '<>', 3);
        $datasReservadas = Reserva::all()->sortByDesc('data_solicitada')->where('status', '<>', 3)->where('status', 2)->where('data_solicitada', '>', date('Y-m-d'));
        $areas = LocavelArea::all()->where('ativo', 1);
        return view('reservas.create', compact('areas', 'reservas', 'datasReservadas'));
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
        $reserva = new Reserva();

        $reserva->locavel_area_id = $request->locavel_area_id;
        $reserva->data_solicitada = $request->data_solicitada;
        $reserva->hora_inicio = $request->hora_inicio;
        $reserva->hora_fim = $request->hora_fim;
        $reserva->obs = $request->obs;
        $reserva->user_id = auth()->user()->id;
        $reserva->status = 1; // 1-Solicitado, 2-Liberado, 3-Removido 
        
        $solicitante = auth()->user(); // retorna os dados do usuário logado.
        
        $existeData = DB::table('reservas')->select('data_solicitada')->where('data_solicitada', $reserva->data_solicitada)->exists();
        
        $dataAtual = date('Y-m-d'); // data atual
                
        $dataLimite = date('d-m-Y', strtotime('+30 days')); // limite de data para permitir solicitações.
        
        if($solicitante->status == 1){ // supondo q status do user 1 seja inadimplente.
            return redirect()->back()->with('alertDanger', 'Desculpe, algo deu errado. Procure o Síndico ou Administradora para resolver.');
        }
        elseif ($existeData == true) { // verifica se existe reserva na data solicitada.
            return redirect()->back()->with('alertDanger', 'Desculpe, esta data/local já está reservada! Escolha uma data/local disponível.');
        }        
        elseif (strtotime($reserva->data_solicitada) < strtotime($dataAtual)) { // verifica se data solicitada é passado.
            return redirect()->back()->with('alertDanger', 'Erro! Data solicitada já passou!');
        }        
        elseif ($reserva->hora_inicio > $reserva->hora_fim) { // verifica se intervalo de horário é válido.
            return redirect()->back()->with('alertDanger', 'Erro! O horário não está correto!');
        }        
        elseif (strtotime($reserva->data_solicitada) > strtotime($dataLimite)) { // verifica se data solicitada está dentro do intervalo permitido.
            return redirect()->back()->with('alertDanger', 'Desculpe! Não é permitido reservas para datas superiores a 30 dias.');
        }        
        else{
            $reserva->save();
            return redirect()->back()->with('alertSuccess', 'Solicitação de reserva enviada com sucesso!');
        }
    }

    /**
     * Status de reserva: 
     * 1 - Solicitidado
     * 2 - Liberado
     */


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
        $reserva = Reserva::find($id);

        if($reserva->status == 1){
            $reserva->status = 2; //ativar cadastro
        }else{
            $reserva->status = 1; //desativar cadastro
        }

        $reserva->update();

        return redirect()->back()->with('alertSuccess', 'Liberação realizada com sucesso!');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->status = 3;
        $reserva->update();

        return redirect()->back()->with('alertDanger', 'Reserva removida com sucesso!');
    }
}
