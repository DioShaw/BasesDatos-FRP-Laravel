<?php

namespace App\Http\Controllers;

use App\Models\Medio;
use Illuminate\Http\Request;

class MedioController extends Controller
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
        $datos['medios']= Medio::paginate(500);
        return view('medio.index', $datos);}
        else{

            $asd5['medios']  = Medio::where('Nombre','like',"%$nombre%")->paginate(5);
            return view('medio.index', $asd5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $datosMedio = request()->except('_token');
            Medio::insert($datosMedio);
            return redirect('medio')->with('mensaje','Registro Creado :) ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medio  $medio
     * @return \Illuminate\Http\Response
     */
    public function show(Medio $medio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medio  $medio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medio=Medio::findOrFail($id);
        return view('medio.edit', compact('medio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medio  $medio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosMedio= request() ->except(['_token','_method']);
        medio::where('id','=',$id)->update($datosMedio);
        $medio=Medio::findOrFail($id);
        return redirect('medio')->with('mensaje','Registro Editado :) ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medio  $medio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medio::destroy($id);
        return redirect('medio');
    }
}
