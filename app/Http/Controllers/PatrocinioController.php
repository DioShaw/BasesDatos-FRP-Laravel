<?php

namespace App\Http\Controllers;

use App\Models\Patrocinio;
use Illuminate\Http\Request;

class PatrocinioController extends Controller
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
        $datos['patrocinios']= Patrocinio::paginate(500);
        return view('patrocinio.index', $datos);}
        else{

            $asd5['patrocinios']  = Patrocinio::where('Nombre','like',"%$nombre%")->paginate(5);
            return view('patrocinio.index', $asd5);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patrocinio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPatrocinio = request() ->except('_token');
        Patrocinio::insert($datosPatrocinio);
        return redirect('patrocinio')->with('mensaje','Registro Creado :) ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function show(Patrocinio $patrocinio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $datosPatrocinio = request() -> except(['_token','_method']);
        Patrocinio::where('id','=',$id)->update($datosPatrocinio);
        $patrocinio=Patrocinio::findOrFail($id);
        return view('patrocinio.edit', compact('patrocinio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPatrocinio = request() -> except(['_token','_method']);
        Patrocinio::where('id','=',$id)->update($datosPatrocinio);
        $patrocinio=Patrocinio::findOrFail($id);
        return redirect('patrocinio')->with('mensaje','Registro Editado :) ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patrocinio::destroy($id);
        return redirect('patrocinio');
    }
}
