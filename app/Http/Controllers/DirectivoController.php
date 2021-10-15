<?php

namespace App\Http\Controllers;

use App\Models\Directivo;
use Illuminate\Http\Request;

class DirectivoController extends Controller
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

     $datos['directivos']= Directivo::paginate(800);
     return view('directivo.index', $datos);

     } else {
        $asd5['directivos']  = Directivo::where('Nombre','like',"%$nombre%")->paginate(5);
       
        return view('directivo.index', $asd5);

     }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directivo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosDirectivo = request()->except('_token');
        Directivo::insert($datosDirectivo);
        return redirect('directivo')->with('mensaje','Registro Creado :) ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directivo  $directivo
     * @return \Illuminate\Http\Response
     */
    public function show(Directivo $directivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directivo  $directivo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $directivo = Directivo::findOrFail($id);
       // print_r($directivo);
        return view('directivo.edit', compact('directivo'));  
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directivo  $directivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDirectivo = request() -> except(['_token','_method']);
        Directivo ::where('id','=',$id)->update($datosDirectivo);
        $directivo=Directivo::findOrFail($id);
        return redirect('directivo')->with('mensaje','Registro Editado :) ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directivo  $directivo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Directivo::destroy($id);
        return redirect('directivo');
    }
}
