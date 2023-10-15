<?php

namespace App\Http\Controllers;
use App\Models\Gray;
use App\Models\Requerimiento;
use Illuminate\Http\Request;

class RequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $grays = Gray::all();

        dd($grays);
        return view('req.capture-req-form' , compact('grays'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $req = new Requerimiento();
        $req->identificador = $request->identificador;
        $req-> descripcion = $request->descripcion;
        $req->gray_id = $request->gray_id;

        $req->save();
    
        return redirect()->route('gray.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requerimiento $requerimiento)
    {
        //
    }
}
