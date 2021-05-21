<?php

namespace App\Http\Controllers;

use App\Models\Skelbimas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SkelbimasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $skelbimai = Skelbimas::with('user')->get();
       
       return view('skelbimai', compact('skelbimai'));
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
        
        $id = Auth::id();

        $request->validate([
            'pavadinimas' => 'required',
            'tekstas' => 'required',           
        ]);
            
        Skelbimas::create([
            'pavadinimas' => $request['pavadinimas'],
            'tekstas' => $request['tekstas'],
            'user_id' => $id,
            
        ]);
        return redirect()->route('skelb');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = Auth::id();
        $skelbimai = Skelbimas::where('user_id', $id)->delete();
       
       return view('skelbimai', compact('skelbimai'));
    }
}
