<?php

namespace App\Http\Controllers;

use App\Models\Tallerista;
use Illuminate\Http\Request;

class TalleristaController extends Controller
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
        $datos['talleristas']= Tallerista::paginate(500);
        return view('tallerista.index', $datos);}
        else{

            $asd5['talleristas']  = Tallerista::where('Nombres','like',"%$nombre%")->paginate(5);
            return view('tallerista.index', $asd5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tallerista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //agregar info desde el formulario

        $datosTallerista = request() ->except('_token');
        Tallerista::insert($datosTallerista);
        return redirect('tallerista')->with('mensaje','Registro Creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tallerista  $tallerista
     * @return \Illuminate\Http\Response
     */
    public function show(Tallerista $tallerista)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tallerista  $tallerista
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tallerista = Tallerista::findOrFail($id);
        return view('tallerista.edit', compact('tallerista'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tallerista  $tallerista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosTallerista = request() ->except(['_token','_method']);
        Tallerista::where('id','=',$id)->update($datosTallerista);
        $tallerista=Tallerista::findOrFail($id);
        return redirect('tallerista')->with('mensaje','Registro Editado con exito');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tallerista  $tallerista
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tallerista::destroy($id);
        return redirect('tallerista');
    }
}
