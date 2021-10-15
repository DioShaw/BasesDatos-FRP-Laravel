<?php

namespace App\Http\Controllers;

use App\Models\Teampombo;
use Illuminate\Http\Request;

class TeampomboController extends Controller
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
        $datos['teampombos']= Teampombo::paginate(500);
        return view('teampombo.index', $datos);}
        else{

            $asd5['teampombos']  = Teampombo::where('Nombres','like',"%$nombre%")->paginate(5);
            return view('teampombo.index', $asd5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teampombo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosTeampombo = request() ->except('_token');
        Teampombo::insert($datosTeampombo);
        return redirect('teampombo')->with('mensaje','Registro Creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teampombo  $teampombo
     * @return \Illuminate\Http\Response
     */
    public function show(Teampombo $teampombo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teampombo  $teampombo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teampombo = Teampombo::findOrFail($id);
        return view('teampombo.edit', compact('teampombo'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teampombo  $teampombo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosTeampombo = request() ->except(['_token','_method']);
        Teampombo::where('id','=',$id)->update($datosTeampombo);
        $teampombo=Teampombo::findOrFail($id);
        return redirect('teampombo')->with('mensaje','Registro Editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teampombo  $teampombo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teampombo::destroy($id);
        return redirect('teampombo');
    }
}
