<?php

namespace App\Http\Controllers;

use App\Models\Asocaja;
use Illuminate\Http\Request;

class AsocajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $nombre = $request->get('buscarpor');

        if ($nombre == null){
        $datos['asocajas']= Asocaja::paginate(800);
        return view('asocaja.index', $datos);}
        else{

            $asd5['asocajas']  = Asocaja::where('Nombre','like',"%$nombre%")->paginate(5);
            return view('asocaja.index', $asd5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asocaja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosAsocaja = request()->except('_token');
        Asocaja::insert($datosAsocaja);
        //return response()->json($datosAsocaja);
        return redirect('asocaja')->with('mensaje','Registro Creado :) ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asocaja  $asocaja
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
   
        //$ASDSADAS
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asocaja  $asocaja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asocaja=Asocaja::findOrFail($id);
        return view('asocaja.edit', compact('asocaja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asocaja  $asocaja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosAsocaja = request() ->except(['_token','_method']);
        Asocaja::where('id','=',$id)->update($datosAsocaja);
        $asocaja=Asocaja::findOrFail($id);
        return redirect('asocaja')->with('mensaje','Registro Editado :) ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asocaja  $asocaja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asocaja::destroy($id);
        return redirect('asocaja');
    }
}
