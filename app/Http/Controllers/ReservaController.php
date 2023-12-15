<?php

namespace App\Http\Controllers;

use App\Reserva;
use App\Juego;
use App\Socio;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    } 
     
    public function index(Request $request)
    {
        $reservas=Reserva::orderBy("f_uso","desc")->paginate(20);
        return view("reservas.index",compact('reservas'));  //Carga la vista index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $socios=Socio::all();
         $juegos=Juego::all();
         $reservas=Reserva::all();
         return view("reservas.create",compact('socios','juegos','reservas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c=Reserva::create($request->all());
       return redirect()->route('reservas.index');
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
        $socios=Socio::all();
         $juegos=Juego::all();
       $c=Reserva::find($id);
       return view("reservas.edit",compact('socios','juegos','c'));
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
        $datos=$request->all();
        Reserva::find($id)->update($datos);
        return redirect()->route('reservas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reserva::find($id)->delete();
         return redirect()->route('reservas.index');
    }
}