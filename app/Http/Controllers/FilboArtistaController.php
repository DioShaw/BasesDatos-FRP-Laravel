<?php

namespace App\Http\Controllers;

use App\Models\Filbo_artista;
use Illuminate\Http\Request;

class FilboArtistaController extends Controller
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
        $datos['filbo_artistas']= Filbo_artista::paginate(500);
        return view('filbo_artista.index', $datos);
        } else{

            $asd5['filbo_artistas']  = Filbo_artista::where('Nombre','like',"%$nombre%")->paginate(5);
       
            return view('filbo_artista.index', $asd5);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filbo_artista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //$datosColegio = request()->all();
           $datosFilbo_artista = request()->except('_token');
           Filbo_artista::insert($datosFilbo_artista);
           return redirect('filbo_artista')->with('mensaje','Registro Creado :) ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filbo_artista  $filbo_artista
     * @return \Illuminate\Http\Response
     */
    public function show(Filbo_artista $filbo_artista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filbo_artista  $filbo_artista
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filbo_artista=Filbo_artista::findOrFail($id);
        return view('filbo_artista.edit', compact('filbo_artista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filbo_artista  $filbo_artista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosFilbo_artista = request() ->except(['_token','_method']);
        filbo_artista::where('id','=',$id)->update($datosFilbo_artista);
        $filbo_artista=Filbo_artista::findOrFail($id);
        return redirect('filbo_artista')->with('mensaje','Registro Editado :) ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filbo_artista  $filbo_artista
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Filbo_artista::destroy($id);
        return redirect('filbo_artista');
    }
}
