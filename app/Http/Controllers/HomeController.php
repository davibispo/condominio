<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $temUnidade = DB::table('unidades')->select('id')->where('user_id', auth()->user()->id)->exists();
        $temVeiculo = DB::table('veiculos')->select('id')->where('user_id', auth()->user()->id)->exists();

        $totalVeiculos = DB::table('veiculos')->select('id')->where('user_id', auth()->user()->id)->count();
        $totalPets = DB::table('pets')->select('id')->where('user_id', auth()->user()->id)->count();
        //dd($temUnidade);
        return view('home', compact('temUnidade', 'temVeiculo', 'totalVeiculos', 'totalPets'));
    }
}
