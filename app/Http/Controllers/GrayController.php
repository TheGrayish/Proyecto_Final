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
        //Gray::where ('nombre', 'Samuel')->get();
        $grays = Gray::all();

        # dd($grays);
        
        

        return view('grayindex', ['grays'=> $grays]);
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
            'email'=>'required|email',
            'password' => 'required'
        ]);

     //   Gray::where('id',$gray->id)
    //  ->update($request->except('_token','_method'));

        $gray = new Gray();
        $gray->email = $request->email;
        $gray->password = $request->password;
        $gray->save();



        return redirect()->route('gray.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gray $gray)
    {
        #dd($gray);
        return view('gray-show', compact('gray'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gray $gray)
    {
        return view('gray-edit', compact('gray'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gray $gray)
    {
        $request->validate([
            'email'=>'required|email',
            'password' => 'required'
        ]);

        $gray->email = $request->email;
        $gray->password = $request->password;
        $gray->save();

        return redirect()->route('gray.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gray $gray)
    {
        $gray->delete();
        return redirect()->route('gray.index');
    }
}
