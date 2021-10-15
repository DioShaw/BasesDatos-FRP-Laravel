<?php

namespace App\Http\Controllers;

use App\Models\Multinacional;
use Illuminate\Http\Request;

class MultinacionalController extends Controller
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
        $datos['multinacionals']= Multinacional::paginate(800);
        return view('multinacional.index', $datos);}
        else{

            $asd5['multinacionals']  = Multinacional::where('Nombre','like',"%$nombre%")->paginate(5);
            return view('multinacional.index', $asd5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('multinacional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosMultinacional = request() ->except('_token');
        Multinacional::insert($datosMultinacional);
        return redirect('multinacional')->with('mensaje','Registro Creado :) ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Multinacional  $multinacional
     * @return \Illuminate\Http\Response
     */
    public function show(Multinacional $multinacional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Multinacional  $multinacional
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datosMultinacional = request() -> except(['_token','_method']);
        Multinacional::where('id','=',$id)->update($datosMultinacional);
        $multinacional=Multinacional::findOrFail($id);
        return view('multinacional.edit', compact('multinacional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Multinacional  $multinacional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosMultinacional = request() -> except(['_token','_method']);
        Multinacional::where('id','=',$id)->update($datosMultinacional);
        $multinacional=Multinacional::findOrFail($id);
        return redirect('multinacional')->with('mensaje','Registro Editado :) ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Multinacional  $multinacional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Multinacional::destroy($id);
        return redirect('multinacional');
    }
}
