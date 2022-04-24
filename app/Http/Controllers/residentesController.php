<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\residentes;

class residentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $residentes = residentes::orderBy('id', 'desc')->paginate(2);
        return [

            'pagination' => [
                'total'             => $residentes->total(),
                'current_page'      => $residentes->currentPage(),
                'per_page'          => $residentes->perPage(),
                'last_page'         => $residentes->lastPage(),
                'from'              => $residentes->firstItem(),
                'to'                => $residentes->lastItem(),
            ],
            'residentes'            => $residentes
        ];
        
    

       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
            //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $residentes = new residentes;
        $residentes->nombre = $request->nombre;
        $residentes->apellido = $request->apellido;
        $residentes->telefono = $request->telefono;
        $residentes->correo = $request->correo;
        $residentes->edad = $request->edad;
        $residentes->direccion = $request->direccion;
        $residentes->comida_entregada = $request->comida_entregada;
        $residentes->observaciones = $request->observaciones;
        $residentes->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $residentes = residentes::findOrFail($id);
        $residentes->nombre = $request->nombre;
        $residentes->apellido = $request->apellido;
        $residentes->telefono = $request->telefono;
        $residentes->correo = $request->correo;
        $residentes->edad = $request->edad;
        $residentes->direccion = $request->direccion;
        $residentes->comida_entregada = $request->comida_entregada;
        $residentes->observaciones = $request->observaciones;
        $residentes->save();
        return $residentes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $residentes = residentes::destroy($request->id);
        return $residentes;
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $residentes = residentes::where('nombre', 'like', '%'.$search.'%')
        ->orWhere('apellido', 'like', '%'.$search.'%')
        ->orWhere('telefono', 'like', '%'.$search.'%')
        ->orWhere('correo', 'like', '%'.$search.'%')
        ->orWhere('edad', 'like', '%'.$search.'%')
        ->orWhere('direccion', 'like', '%'.$search.'%')
        ->orWhere('comida_entregada', 'like', '%'.$search.'%')
        ->orWhere('observaciones', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->paginate(9);
        return [
            'pagination' => [
                'total'             => $residentes->total(),
                'current_page'      => $residentes->currentPage(),
                'per_page'          => $residentes->perPage(),
                'last_page'         => $residentes->lastPage(),
                'from'              => $residentes->firstItem(),
                'to'                => $residentes->lastItem(),
            ],
            'residentes'            => $residentes
        ];
    }
 
}
