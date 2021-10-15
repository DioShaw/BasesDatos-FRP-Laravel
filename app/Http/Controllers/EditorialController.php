<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

     $nombre = $request->get('buscarpor');


     if ($nombre == null){

     $datos['editorials']= Editorial::paginate(800);
     return view('editorial.index', $datos);

     } else {
        $asd5['editorials']  = Editorial::where('Nombre','like',"%$nombre%")->paginate(5);
       
        return view('editorial.index', $asd5);

     }

    
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEditorial = request()->except('_token');
        Editorial::insert($datosEditorial);

        return redirect('editorial')->with('mensaje','Registro Creado :) ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $asd5['editorials'] =  Editorial::query()->where('Descuento', 'LIKE', "%{'35'}%")->paginate(15);
       // $asd5['editorials'] = DB::table('Editorial')->pluck
       // $datos = Editorial::find('%35%');
        return view('editorial.index', $asd5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editorial = Editorial::findOrFail($id);
        print_r($editorial);
        return view('editorial.edit', compact('editorial'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEditorial = request() -> except(['_token','_method']);
        Editorial ::where('id','=',$id)->update($datosEditorial);
        $editorial=Editorial::findOrFail($id);
        return redirect('editorial')->with('mensaje','Registro Editado :) ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Editorial::destroy($id);
        return redirect('editorial');
    }
}
