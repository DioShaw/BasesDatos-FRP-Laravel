<?php

namespace App\Http\Controllers;

use App\Models\Practicante;
use Illuminate\Http\Request;

class PracticanteController extends Controller
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
        $datos['practicantes']= Practicante::paginate(50);
        return view('practicante.index', $datos); } else
        {
            $asd5['practicantes']  = Practicante::where('nombres','like',"%$nombre%")->paginate(5);
            return view('practicante.index', $asd5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('practicante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               $datosPracticante = request() ->except('_token');
               Practicante::insert($datosPracticante);
               return redirect('practicante')->with('mensaje','Registro Creado :) ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Practicante  $practicante
     * @return \Illuminate\Http\Response
     */
    public function show(Practicante $practicante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Practicante  $practicante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {           
        $practicante = Practicante::findOrFail($id);

        return view('practicante.edit', compact('practicante'));  
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Practicante  $practicante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPracticante = request() -> except(['_token','_method']);
        Practicante::where('id','=',$id)->update($datosPracticante);
        $practicante=Practicante::findOrFail($id);
        return redirect('practicante')->with('mensaje','Registro Editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Practicante  $practicante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Practicante::destroy($id);
        return redirect('practicante')->with('mensaje','Practicante Borrado');
    }
}
