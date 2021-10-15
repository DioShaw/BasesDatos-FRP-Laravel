<?php

namespace App\Http\Controllers;

use App\Models\Colegio;
use Illuminate\Http\Request;

class ColegioController extends Controller
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
        $datos['colegios']= Colegio::paginate(800);
        return view('colegio.index', $datos);
    } else {

        $asd5['colegios']  = Colegio::where('Nombre','like',"%$nombre%")->paginate(5);
        return view('colegio.index', $asd5);
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colegio.create');
             
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre'=>'required|string|max:100',
            'nit'=>'required|string|max:100',
            'calidad'=>'required|string|max:100'
        ];
        $mensaje=['required'=>'El campo :attribute es requerido'];
        $this->validate($request, $campos, $mensaje);
        //$datosColegio = request()->all();
        $datosColegio = request()->except('_token');
        Colegio::insert($datosColegio);
        return redirect('colegio')->with('mensaje','Registro Creado :) ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function show(Colegio $colegio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colegio=Colegio::findOrFail($id);
        return view('colegio.edit', compact('colegio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosColegio = request() ->except(['_token','_method']);
        Colegio::where('id','=',$id)->update($datosColegio);
        $colegio=Colegio::findOrFail($id);
        return redirect('colegio')->with('mensaje','Registro Editado :) ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Colegio::destroy($id);
        return redirect('colegio');
    }
}
