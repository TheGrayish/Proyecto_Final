<?php

namespace App\Http\Controllers;

use App\Models\Gray;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class GrayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('grayindex');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('graycreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'correo'=>'required'|'email',
            'password' => ['required', 'confirmed', Password::min(8)]
        ]);

        $gray = new Gray();
        $gray->correo = $request->correo;
        $gray->password = $request->password;
        $gray->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Gray $gray)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gray $gray)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gray $gray)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gray $gray)
    {
        //
    }
}
